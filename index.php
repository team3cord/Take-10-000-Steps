// Refer to http://16wells.com/build-a-reveal-tab-for-your-facebook-page for configuration
require 'facebook.php';
$app_id = "375176422616052";
$app_secret = "97fb89bcc5eda70719d763cd4e806aec";
$facebook = new Facebook(array(
'appId' => $app_id,
'secret' => $app_secret,
'cookie' => true
));
$signed_request = $facebook->getSignedRequest();
$page_id = $signed_request["page"]["id"];
$page_admin = $signed_request["page"]["admin"];
$like_status = $signed_request["page"]["liked"];
$country = $signed_request["user"]["country"];
$locale = $signed_request["user"]["locale"];
// The following statement does a test of $like_status and chooses which page to display to the visitor
if ($like_status) {$a = file_get_contents("reveal.php");
echo ($a);
}
else {$a = file_get_contents("prelike.php");
echo ($a);
}
?>