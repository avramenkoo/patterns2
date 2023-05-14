<?php

class YouTubeUploader {
  private $channelId;
  private $channelApiKey;

  private $youtubeApi;
  private $fileSystem;
  private $videoConverter;

  public function __construct(string $channelId, string $channelApiKey) {
    $this->channelId = $channelId;
    $this->channelApiKey = $channelApiKey;

    $this->youtubeApi = new YouTubeApi();
    $this->fileSystem = new FileSystem();
    $this->videoConverter = new VideoConverter();
  }

  public function upload(string $filePath): void {
    $bytes = $this->fileSystem->read($filePath);

    $video = $this->videoConverter->convert($bytes, $filePath, "mp4");

    $this->youtubeApi->upload($video, $this->channelId, $this->channelApiKey);
  }
}

class YouTubeApi {
  public function upload($video, string $channelId, string $channelApiKey): void {}
}

class FileSystem {
  public function read(string $filePath) {}
}

class VideoConverter {
  public function convert($data, string $fileName, string $format) {}
}
