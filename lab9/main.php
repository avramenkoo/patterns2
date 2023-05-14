<?php

// Design pattern: Facade

require_once 'YouTubeUploader.php';

$ytUploader = new YouTubeUploader("UCpnkp_D4FLPCiXOmDhoAeYA", "real_channel_api_key_goes_here");
$ytUploader->upload("unusual_memes_compilation_1.mp4");
$ytUploader->upload("unusual_memes_compilation_2.mkv");
