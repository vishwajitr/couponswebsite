<?php
class WordPressAPI {
    private $base_url;

    public function __construct($base_url) {
        $this->base_url = $base_url;
    }

    public function getData($endpoint) {
        $url = $this->base_url . '/' . $endpoint;
        $response = wp_remote_get($url);
        if (!is_wp_error($response) && $response['response']['code'] === 200) {
            return json_decode($response['body'], true);
        } else {
            return null;
        }
    }

    public function getDataAbsolute($endpoint) {
        $url = $endpoint;
        $response = wp_remote_get($url);
        if (!is_wp_error($response) && $response['response']['code'] === 200) {
            return json_decode($response['body'], true);
        } else {
            return null;
        }
    }

}
