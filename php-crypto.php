<?php
// php-crypto 0.1.1
// https://github.com/bukka/php-crypto

/**
 * Alorithm class (parent of cipher and digest algorithms)
 */
class Crypto\Algorithm {
    /**
     * Algorithm name
     * @var string
     */
    protected $algorithm;

    /**
     * Algorithm constructor
     * @param string $algorithm
     */
    public function __construct($algorithm) {}

    /**
     * Returns algorithm string
     * @return string
     */
    public function getAlgorithmName() {}

}

/**
 * Class providing cipher algorithms
 */
class Crypto\Cipher extends Crypto\Algorithm {
    const MODE_ECB = 1;
    const MODE_CBC = 2;
    const MODE_CFB = 3;
    const MODE_OFB = 4;
    const MODE_CTR = 5;
    const MODE_GCM = 6;
    const MODE_CCM = 7;
    const MODE_XTS = 65537;

    /**
     * Returns cipher algorithms
     * @param bool $aliases
     * @param string $prefix
     * @return string
     */
    public static function getAlgorithms($aliases = false, $prefix = null) {}

    /**
     * Finds out whether algorithm exists
     * @param string $algorithm
     * @return bool
     */
    public static function hasAlgorithm($algorithm) {}

    /**
     * Finds out whether the cipher mode is defined in the used OpenSSL library
     * @param int $mode
     * @return bool
     */
    public static function hasMode($mode) {}

    /**
     * Cipher magic method for calling static methods
     * @param string $name
     * @param array $arguments
     */
    public static function __callStatic($name, $arguments) {}

    /**
     * Cipher constructor
     * @param string $algorithm
     * @param int $mode
     * @param string $key_size
     */
    public function __construct($algorithm, $mode = NULL, $key_size = NULL) {}

    /**
     * Initializes cipher encryption
     * @param string $key
     * @param string $iv
     * @return null
     */
    public function encryptInit($key, $iv = null) {}

    /**
     * Updates cipher encryption
     * @param string $data
     * @return string
     */
    public function encryptUpdate($data) {}

    /**
     * Finalizes cipher encryption
     * @return string
     */
    public function encryptFinish() {}

    /**
     * Enrypts text to ciphertext
     * @param string $data
     * @param string $key
     * @param string $iv
     * @return string
     */
    public function encrypt($data, $key, $iv = null) {}

    /**
     * Initializes cipher decription
     * @param string $key
     * @param string $iv
     * @return null
     */
    public function decryptInit($key, $iv = null) {}

    /**
     * Updates cipher decryption
     * @param string $data
     * @return string
     */
    public function decryptUpdate($data) {}

    /**
     * Finalizes cipher decryption
     * @return string
     */
    public function decryptFinish() {}

    /**
     * Decrypts ciphertext to decrypted text
     * @param string $data
     * @param string $key
     * @param string $iv
     * @return string
     */
    public function decrypt($data, $key, $iv = null) {}

    /**
     * Returns cipher block size
     * @return int
     */
    public function getBlockSize() {}

    /**
     * Returns cipher key length
     * @return int
     */
    public function getKeyLength() {}

    /**
     * Returns cipher IV length
     * @return int
     */
    public function getIVLength() {}

    /**
     * Returns cipher mode
     * @return int
     */
    public function getMode() {}

    /**
     * Returns authentication tag
     * @param int $tag_size
     * @return string
     */
    public function getTag($tag_size) {}

    /**
     * Sets authentication tag
     * @param string $tag
     * @return null
     */
    public function setTag($tag) {}

    /**
     * Sets additional application data for authenticated encryption
     * @param string $aad
     * @return null
     */
    public function setAAD($aad) {}

}

/**
 * Class providing hash algorithms
 */
class Crypto\Hash extends Crypto\Algorithm {
    /**
     * Returns hash algorithms
     * @param bool $aliases
     * @param string $prefix
     * @return string
     */
    public static function getAlgorithms($aliases = false, $prefix = null) {}

    /**
     * Finds out whether algorithm exists
     * @param string $algorithm
     * @return bool
     */
    public static function hasAlgorithm($algorithm) {}

    /**
     * Hash magic method for calling static methods
     * @param string $name
     * @param array $arguments
     */
    public static function __callStatic($name, $arguments) {}

    /**
     * Hash constructor
     * @param string $algorithm
     */
    public function __construct($algorithm) {}

    /**
     * Updates hash
     * @param string $data
     * @return null
     */
    public function update($data) {}

    /**
     * Return hash digest in raw foramt
     * @return string
     */
    public function digest() {}

    /**
     * Return hash digest in hex format
     * @return string
     */
    public function hexdigest() {}

    /**
     * Returns hash block size
     * @return int
     */
    public function getBlockSize() {}

    /**
     * Returns hash size
     * @return int
     */
    public function getSize() {}

}

/**
 * Exception class for algorithms errors
 */
class Crypto\AlgorithmException extends Exception {
    const CIPHER_NOT_FOUND = 1;
    const CIPHER_MODE_NOT_FOUND = 2;
    const CIPHER_MODE_NOT_AVAILABLE = 3;
    const CIPHER_AUTHENTICATION_NOT_SUPPORTED = 4;
    const CIPHER_AUTHENTICATION_FAILED = 5;
    const CIPHER_KEY_LENGTH = 6;
    const CIPHER_IV_LENGTH = 7;
    const CIPHER_AAD_SETTER_FLOW = 8;
    const CIPHER_AAD_SETTER_FAILED = 9;
    const CIPHER_TAG_GETTER_FLOW = 10;
    const CIPHER_TAG_SETTER_FLOW = 11;
    const CIPHER_TAG_GETTER_FAILED = 12;
    const CIPHER_TAG_SETTER_FAILED = 13;
    const CIPHER_TAG_LENGTH_UNDER = 14;
    const CIPHER_TAG_LENGTH_OVER = 15;
    const CIPHER_TAG_VARIFY_FAILED = 16;
    const CIPHER_INIT_ALG_FAILED = 17;
    const CIPHER_INIT_CTX_FAILED = 18;
    const CIPHER_UPDATE_FAILED = 19;
    const CIPHER_FINISH_FAILED = 20;
    const ENCRYPT_INIT_STATUS = 21;
    const ENCRYPT_UPDATE_STATUS = 22;
    const ENCRYPT_FINISH_STATUS = 23;
    const DECRYPT_INIT_STATUS = 24;
    const DECRYPT_UPDATE_STATUS = 25;
    const DECRYPT_FINISH_STATUS = 26;
    const HASH_ALGORITHM_NOT_FOUND = 27;
    const HASH_STATIC_NOT_FOUND = 28;
    const HASH_INIT_FAILED = 29;
    const HASH_UPDATE_FAILED = 30;
    const HASH_DIGEST_FAILED = 31;

}

/**
 * Class for base64 encoding and docoding
 */
class Crypto\Base64 {
    /**
     * Encodes string $data to base64 encoding
     * @param string $data
     * @return string
     */
    public function encode($data) {}

    /**
     * Decodes base64 string $data to raw encoding
     * @param string $data
     * @return string
     */
    public function decode($data) {}

    /**
     * Base64 constructor
     */
    public function __construct() {}

    /**
     * Encodes block of characters from $data and saves the reminder of the last block to the encoding context
     * @param string $data
     */
    public function encode($data) {}

    /**
     * Encodes characters that left in the encoding context
     */
    public function encodeFinish() {}

    /**
     * Decodes block of characters from $data and saves the reminder of the last block to the encoding context
     * @param string $data
     */
    public function decode($data) {}

    /**
     * Decodes characters that left in the encoding context
     */
    public function decodeFinish() {}

}

/**
 * Exception class for base64 errors
 */
class Crypto\Base64Exception extends Exception {
    const ENCODE_UPDATE_STATUS = 1;
    const ENCODE_FINISH_STATUS = 2;
    const DECODE_UPDATE_STATUS = 3;
    const DECODE_FINISH_STATUS = 4;
    const DECODE_FAILED = 5;

}

/**
 * Class for generating random numbers
 */
class Crypto\Rand {
    /**
     * Generates pseudo random bytes
     * @param int $num
     * @param bool $must_be_strong
     * @param bool $returned_strong_result
     * @return string
     */
    public static function generate($num, $must_be_strong = true, &$returned_strong_result = true) {}

    /**
     * Mixes bytes in $buf into PRNG state
     * @param string $buf
     * @param float $entropy
     * @return null
     */
    public static function seed($buf, $entropy = (float) strlen($buf)) {}

    /**
     * Cleans up PRNG state
     * @return null
     */
    public static function cleanup() {}

    /**
     * Reads a number of bytes from file $filename and adds them to the PRNG. If max_bytes is non-negative, up to to max_bytes are read; if $max_bytes is -1, the complete file is read
     * @param string $filename
     * @param int $max_bytes
     * @return int
     */
    public static function loadFile($filename, $max_bytes = -1) {}

    /**
     * Writes a number of random bytes (currently 1024) to file $filename which can be used to initialize the PRNG by calling Crypto\Rand::loadFile() in a later session
     * @param string $filename
     * @return int
     */
    public static function writeFile($filename) {}

    /**
     * Queries the entropy gathering daemon EGD on socket path. It queries $bytes bytes and if $seed is true, then the data are seeded, otherwise the data are returned
     * @param string $path
     * @param int $bytes
     * @param bool $seed
     * @return mixed
     */
    public static function egd($path, $bytes = 255, $seed = true) {}

}
