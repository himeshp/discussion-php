<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace OpenAPI\OpenAPI\Models\Operations;


/** GetSingleDiscussionResponseBody - Discussion details. */
class GetSingleDiscussionResponseBody
{
    /**
     *
     * @var ?string $title
     */
    #[\JMS\Serializer\Annotation\SerializedName('title')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $title = null;

    /**
     *
     * @var ?string $body
     */
    #[\JMS\Serializer\Annotation\SerializedName('body')]
    #[\JMS\Serializer\Annotation\SkipWhenNull]
    public ?string $body = null;

    /**
     * @param  ?string  $title
     * @param  ?string  $body
     */
    public function __construct(?string $title = null, ?string $body = null)
    {
        $this->title = $title;
        $this->body = $body;
    }
}