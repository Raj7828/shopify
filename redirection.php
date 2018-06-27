<?php
  //app path 
   $current_script_name = split("/",$_SERVER['SCRIPT_NAME']);
    if (($key = array_search(end($current_script_name), $current_script_name)) !== false) {
        unset($current_script_name[$key]);
    }
    $app_path = implode("/", $current_script_name);
    
$confirmation_url = "https://$shop/admin/apps/".SHOPIFY_APP_API_KEY."/first_app/admin_dashboard.php";
// $confirmation_url = "https://$shop/admin/apps/".SHOPIFY_APP_API_KEY.$app_path."/admin_dashboard.php";
  die("<script> top.location.href='$confirmation_url'</script>");
