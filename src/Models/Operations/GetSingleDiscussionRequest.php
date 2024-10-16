<?php

/**
 * Code generated by Speakeasy (https://speakeasy.com). DO NOT EDIT.
 */

declare(strict_types=1);

namespace OpenAPI\OpenAPI\Models\Operations;

use OpenAPI\OpenAPI\Utils\SpeakeasyMetadata;
class GetSingleDiscussionRequest
{
    /**
     * The owner of the repository.
     *
     * @var string $owner
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=owner')]
    public string $owner;

    /**
     * The name of the repository.
     *
     * @var string $repo
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=repo')]
    public string $repo;

    /**
     * The discussion number.
     *
     * @var int $discussionNumber
     */
    #[SpeakeasyMetadata('pathParam:style=simple,explode=false,name=discussion_number')]
    public int $discussionNumber;

    /**
     * @param  string  $owner
     * @param  string  $repo
     * @param  int  $discussionNumber
     */
    public function __construct(string $owner, string $repo, int $discussionNumber)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->discussionNumber = $discussionNumber;
    }
}