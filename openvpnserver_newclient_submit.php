<?PHP
$ADD_NEW_CLIENT = $_POST['ADD_CLIENT'];
$NEW_PASSWORD_PKCS12 = $_POST['PASSWORD_PKCS12'];
echo "Please wait while adding new client...";
shell_exec("/etc/rc.d/rc.openvpnserver add_client $ADD_NEW_CLIENT $NEW_PASSWORD_PKCS12  >/var/local/emhttp/plugins/openvpnserver/add_client.log 2>&1");
?>
<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
