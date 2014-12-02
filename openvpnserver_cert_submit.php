<?PHP
$KEY_COUNTRY = $_POST['KEY_COUNTRY'];
$KEY_PROVINCE = $_POST['KEY_PROVINCE'];
$KEY_CITY = $_POST['KEY_CITY'];
$KEY_ORG = $_POST['KEY_ORG'];
$KEY_EMAIL = $_POST['KEY_EMAIL'];
$KEY_PATH = $_POST['KEY_PATH'];

$arguments = "";
$arguments .= "KEY_COUNTRY_NEW=\"$KEY_COUNTRY\"\n";
$arguments .= "KEY_PROVINCE_NEW=\"$KEY_PROVINCE\"\n";
$arguments .= "KEY_CITY_NEW=\"$KEY_CITY\"\n";
$arguments .= "KEY_ORG_NEW=\"$KEY_ORG\"\n";
$arguments .= "KEY_EMAIL_NEW=\"$KEY_EMAIL\"\n";
$arguments .= "KEY_PATH_NEW=\"$KEY_PATH\"\n";

echo "Please wait while updating configuration for certs...";

$file = "/usr/local/emhttp/plugins/openvpnserver/openvpnserver_cert.args";
file_put_contents($file, $arguments);
shell_exec("/etc/rc.d/rc.openvpnserver updatecfg_cert");
?>

<HTML>
<HEAD><SCRIPT>var goback=parent.location;</SCRIPT></HEAD>
<BODY onLoad="parent.location=goback;"</BODY>
</HTML>
