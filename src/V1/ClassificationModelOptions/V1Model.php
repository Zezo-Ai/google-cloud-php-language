<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/language/v1/language_service.proto

namespace Google\Cloud\Language\V1\ClassificationModelOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options for the V1 model.
 *
 * Generated from protobuf message <code>google.cloud.language.v1.ClassificationModelOptions.V1Model</code>
 */
class V1Model extends \Google\Protobuf\Internal\Message
{

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Language\V1\LanguageService::initOnce();
        parent::__construct($data);
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(V1Model::class, \Google\Cloud\Language\V1\ClassificationModelOptions_V1Model::class);

