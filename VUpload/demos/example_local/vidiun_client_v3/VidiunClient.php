<?php
require_once("VidiunClientBase.php");

class VidiunAspectRatioType
{
	const KEEP_ORIG_RATIO = 1;
	const KEEP_ORIG_DIMENSIONS = 2;
	const ASPECT_4_3 = 3;
	const ASPECT_16_9 = 4;
	const KEEP_HEIGHT = 5;
}

class VidiunBatchJobStatus
{
	const PENDING = 0;
	const QUEUED = 1;
	const PROCESSING = 2;
	const PROCESSED = 3;
	const MOVEFILE = 4;
	const FINISHED = 5;
	const FAILED = 6;
	const ABORTED = 7;
}

class VidiunBatchJobType
{
	const CONVERT = 0;
	const IMPORT = 1;
	const DELETE = 2;
	const FLATTEN = 3;
	const BULKUPLOAD = 4;
	const DVDCREATOR = 5;
	const DOWNLOAD = 6;
	const OOCONVERT = 7;
	const PRECONVERT = 10;
	const POSTCONVERT = 11;
	const PROJECT = 1000;
}

class VidiunEditorType
{
	const SIMPLE = 1;
	const ADVANCED = 2;
}

class VidiunEntryStatus
{
	const ERROR_CONVERTING = -1;
	const IMPORT = 0;
	const PRECONVERT = 1;
	const READY = 2;
	const DELETED = 3;
	const PENDING = 4;
	const MODERATE = 5;
	const BLOCKED = 6;
}

class VidiunEntryType
{
	const AUTOMATIC = -1;
	const MEDIA_CLIP = 1;
	const MIX = 2;
	const PLAYLIST = 5;
	const DATA = 6;
	const DOCUMENT = 10;
}

class VidiunGender
{
	const UNKNOWN = 0;
	const MALE = 1;
	const FEMALE = 2;
}

class VidiunLicenseType
{
	const UNKNOWN = -1;
	const NONE = 0;
	const COPYRIGHTED = 1;
	const PUBLIC_DOMAIN = 2;
	const CREATIVECOMMONS_ATTRIBUTION = 3;
	const CREATIVECOMMONS_ATTRIBUTION_SHARE_ALIKE = 4;
	const CREATIVECOMMONS_ATTRIBUTION_NO_DERIVATIVES = 5;
	const CREATIVECOMMONS_ATTRIBUTION_NON_COMMERCIAL = 6;
	const CREATIVECOMMONS_ATTRIBUTION_NON_COMMERCIAL_SHARE_ALIKE = 7;
	const CREATIVECOMMONS_ATTRIBUTION_NON_COMMERCIAL_NO_DERIVATIVES = 8;
	const GFDL = 9;
	const GPL = 10;
	const AFFERO_GPL = 11;
	const LGPL = 12;
	const BSD = 13;
	const APACHE = 14;
	const MOZILLA = 15;
}

class VidiunMailJobStatus
{
	const PENDING = 1;
	const SENT = 2;
	const ERROR = 3;
	const QUEUED = 4;
}

class VidiunMediaType
{
	const VIDEO = 1;
	const IMAGE = 2;
	const AUDIO = 5;
}

class VidiunModerationFlagStatus
{
	const PENDING = 1;
	const MODERATED = 2;
}

class VidiunModerationFlagType
{
	const SEXUAL_CONTENT = 1;
	const VIOLENT_REPULSIVE = 2;
	const HARMFUL_DANGEROUS = 3;
	const SPAM_COMMERCIALS = 4;
}

class VidiunModerationObjectType
{
	const ENTRY = 2;
	const USER = 3;
}

class VidiunNotificationObjectType
{
	const ENTRY = 1;
	const VSHOW = 2;
	const USER = 3;
	const BATCH_JOB = 4;
}

class VidiunNotificationStatus
{
	const PENDING = 1;
	const SENT = 2;
	const ERROR = 3;
	const SHOULD_RESEND = 4;
	const ERROR_RESENDING = 5;
	const SENT_SYNCH = 6;
	const QUEUED = 7;
}

class VidiunNotificationType
{
	const ENTRY_ADD = 1;
	const ENTR_UPDATE_PERMISSIONS = 2;
	const ENTRY_DELETE = 3;
	const ENTRY_BLOCK = 4;
	const ENTRY_UPDATE = 5;
	const ENTRY_UPDATE_THUMBNAIL = 6;
	const ENTRY_UPDATE_MODERATION = 7;
	const USER_ADD = 21;
	const USER_BANNED = 26;
}

class VidiunPartnerType
{
	const WIKI = 100;
	const WORDPRESS = 101;
	const DRUPAL = 102;
	const DEKIWIKI = 103;
	const COMMUNITY_EDITION = 105;
}

class VidiunPlaylistType
{
	const DYNAMIC = 10;
	const STATIC_LIST = 3;
	const EXTERNAL = 101;
}

class VidiunReportType
{
	const TOP_CONTENT = 1;
	const CONTENT_DROPOFF = 2;
	const CONTENT_INTERACTIONS = 3;
	const MAP_OVERLAY = 4;
	const TOP_CONTRIBUTORS = 5;
	const TOP_SYNDICATION = 6;
	const CONTENT_CONTRIBUTIONS = 7;
}

class VidiunSearchProviderType
{
	const FLICKR = 3;
	const YOUTUBE = 4;
	const MYSPACE = 7;
	const PHOTOBUCKET = 8;
	const JAMENDO = 9;
	const CCMIXTER = 10;
	const NYPL = 11;
	const CURRENT = 12;
	const MEDIA_COMMONS = 13;
	const VIDIUN = 20;
	const VIDIUN_USER_CLIPS = 21;
	const ARCHIVE_ORG = 22;
	const VIDIUN_PARTNER = 23;
	const METACAFE = 24;
	const SEARCH_PROXY = 28;
}

class VidiunSessionType
{
	const USER = 0;
	const ADMIN = 2;
}

class VidiunSourceType
{
	const FILE = 1;
	const WEBCAM = 2;
	const URL = 5;
	const SEARCH_PROVIDER = 6;
}

class VidiunStatsEventType
{
	const WIDGET_LOADED = 1;
	const MEDIA_LOADED = 2;
	const PLAY = 3;
	const PLAY_REACHED_25 = 4;
	const PLAY_REACHED_50 = 5;
	const PLAY_REACHED_75 = 6;
	const PLAY_REACHED_100 = 7;
	const OPEN_EDIT = 8;
	const OPEN_VIRAL = 9;
	const OPEN_DOWNLOAD = 10;
	const OPEN_REPORT = 11;
	const BUFFER_START = 12;
	const BUFFER_END = 13;
	const OPEN_FULL_SCREEN = 14;
	const CLOSE_FULL_SCREEN = 15;
	const REPLAY = 16;
	const SEEK = 17;
	const OPEN_UPLOAD = 18;
	const SAVE_PUBLISH = 19;
	const CLOSE_EDITOR = 20;
	const PRE_BUMPER_PLAYED = 21;
	const POST_BUMPER_PLAYED = 22;
	const BUMPER_CLICKED = 23;
	const FUTURE_USE_1 = 24;
	const FUTURE_USE_2 = 25;
	const FUTURE_USE_3 = 26;
}

class VidiunUiConfCreationMode
{
	const WIZARD = 2;
	const ADVANCED = 3;
}

class VidiunUiConfObjType
{
	const PLAYER = 1;
	const CONTRIBUTION_WIZARD = 2;
	const SIMPLE_EDITOR = 3;
	const ADVANCED_EDITOR = 4;
	const PLAYLIST = 5;
	const APP_STUDIO = 6;
}

class VidiunUserStatus
{
	const BLOCKED = 0;
	const ACTIVE = 1;
	const DELETED = 2;
}

class VidiunWidgetSecurityType
{
	const NONE = 1;
	const TIMEHASH = 2;
}

class VidiunAdminUser extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $email = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $screenName = null;


}

class VidiunBaseEntry extends VidiunObjectBase
{
	/**
	 * Auto generated 10 characters alphanumeric string
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Entry name (Min 1 chars)
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Entry description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The ID of the user who is the owner of this entry 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * Entry tags
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Entry admin tags can be updated only by administrators
	 *
	 * @var string
	 */
	public $adminTags = null;

	/**
	 * 
	 *
	 * @var VidiunEntryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The type of the entry, this is auto filled by the derived entry object
	 *
	 * @var VidiunEntryType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Calculated rank
	 *
	 * @var int
	 * @readonly
	 */
	public $rank = null;

	/**
	 * The total (sum) of all votes
	 *
	 * @var int
	 * @readonly
	 */
	public $totalRank = null;

	/**
	 * Number of votes
	 *
	 * @var int
	 * @readonly
	 */
	public $votes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $groupId = null;

	/**
	 * Can be used to store various partner related data as a string 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Download URL for the entry
	 *
	 * @var string
	 * @readonly
	 */
	public $downloadUrl = null;

	/**
	 * Indexed search text for full text search
	 *
	 * @var string
	 * @readonly
	 */
	public $searchText = null;

	/**
	 * License type used for this entry
	 *
	 * @var VidiunLicenseType
	 */
	public $licenseType = null;

	/**
	 * Version of the entry data
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;


}

class VidiunFilter extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $orderBy = null;


}

class VidiunBaseEntryFilter extends VidiunFilter
{
	/**
	 * This filter should be in use for retrieving only a specific entry (identified by its entryId).
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * This filter should be in use for retrieving few specific entries (string should include comma separated list of entryId strings).
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * This filter should be in use for retrieving specific media entries while applying an SQL 'LIKE' pattern matching on entry names. It should include only one pattern for matching entry names against.
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameMultiLikeAnd = null;

	/**
	 * This filter should be in use for retrieving entries with a specific name.
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * This filter should be in use for retrieving only media entries which were uploaded by/assigned to users of a specific Vidiun Partner (identified by Partner ID).
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * This filter should be in use for retrieving only media entries within Vidiun network which were uploaded by/assigned to users of few Vidiun Partners  (string should include comma separated list of PartnerIDs)
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * This filter parameter should be in use for retrieving only entries, uploaded by/assigned to a specific user (identified by user Id).
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * This filter should be in use for retrieving specific entries while applying an SQL 'LIKE' pattern matching on entry tags. It should include only one pattern for matching entry tags against.
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * This filter should be in use for retrieving specific entries while applying an SQL 'LIKE' pattern matching on entry tags, set by an ADMIN user. It should include only one pattern for matching entry tags against.
	 *
	 * @var string
	 */
	public $adminTagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminTagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminTagsMultiLikeAnd = null;

	/**
	 * This filter should be in use for retrieving only entries, at a specific {@link ?object=VidiunEntryStatus VidiunEntryStatus}.
	 *
	 * @var VidiunEntryStatus
	 */
	public $statusEqual = null;

	/**
	 * This filter should be in use for retrieving only entries, at few specific {@link ?object=VidiunEntryStatus VidiunEntryStatus}.
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var VidiunEntryType
	 */
	public $typeEqual = null;

	/**
	 * This filter should be in use for retrieving entries of few {@link ?object=VidiunEntryType VidiunEntryType} (string should include a comma separated list of {@link ?object=VidiunEntryType VidiunEntryType} enumerated parameters).
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * This filter parameter should be in use for retrieving only media entries which were created at Vidiun system after a specific time/date (standard timestamp format).
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * This filter parameter should be in use for retrieving only media entries which were created at Vidiun system before a specific time/date (standard timestamp format).
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $groupIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTextMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTextMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsNameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsNameMultiLikeAnd = null;


}

class VidiunBaseEntryListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunBaseEntryArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunBaseEntryOrderBy
{
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const RANK_ASC = "+rank";
	const RANK_DESC = "-rank";
}

class VidiunBaseJob extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $processorName = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $processorLocation = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $processorExpiration = null;


}

class VidiunBatchGetExclusiveNotificationJobsResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunNotificationArray
	 * @readonly
	 */
	public $notifications;

	/**
	 * 
	 *
	 * @var VidiunPartnerArray
	 * @readonly
	 */
	public $partners;


}

class VidiunBatchJob extends VidiunBaseJob
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var VidiunBatchJobType
	 * @readonly
	 */
	public $jobType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;

	/**
	 * 
	 *
	 * @var VidiunBatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $abort = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $checkAgainTimeout = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $progress = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatesCount = null;

	/**
	 * When one job creates another - the parent should set this parentJobId to be its own id.
	 *
	 * @var int
	 */
	public $parentJobId = null;


}

class VidiunBulkUpload extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $uploadedBy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadedOn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numOfEntries = null;

	/**
	 * 
	 *
	 * @var VidiunBatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $logFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $csvFileUrl = null;


}

class VidiunBulkUploadListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunBulkUploads
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunCEError extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $browser = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverIp = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverOs = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $phpVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ceAdminEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

class VidiunClientNotification extends VidiunObjectBase
{
	/**
	 * The URL where the notification should be sent to 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * The serialized notification data to send
	 *
	 * @var string
	 */
	public $data = null;


}

class VidiunCommercialUseType
{
	const COMMERCIAL_USE = "commercial_use";
	const NON_COMMERCIAL_USE = "non-commercial_use";
}

class VidiunConversionProfile extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $profileType = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $commercialTranscoder = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * 
	 *
	 * @var VidiunAspectRatioType
	 */
	public $aspectRatioType = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $bypassFlv = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $profileTypeSuffix = null;


}

class VidiunFilterPager extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $pageSize = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $pageIndex = null;


}

class VidiunMailJob extends VidiunBaseJob
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $mailType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mailPriority = null;

	/**
	 * 
	 *
	 * @var VidiunMailJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientEmail = null;

	/**
	 * vuserId  
	 *
	 * @var int
	 */
	public $recipientId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bodyParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subjectParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templatePath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $culture = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $campaignId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $minSendDate = null;


}

class VidiunPlayableEntry extends VidiunBaseEntry
{
	/**
	 * Number of plays
	 *
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * Number of views
	 *
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * The width in pixels
	 *
	 * @var int
	 * @readonly
	 */
	public $width = null;

	/**
	 * The height in pixels
	 *
	 * @var int
	 * @readonly
	 */
	public $height = null;

	/**
	 * Thumbnail URL
	 *
	 * @var string
	 * @readonly
	 */
	public $thumbnailUrl = null;

	/**
	 * The duration in seconds
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;


}

class VidiunMediaEntry extends VidiunPlayableEntry
{
	/**
	 * The media type of the entry
	 *
	 * @var VidiunMediaType
	 * @insertonly
	 */
	public $mediaType = null;

	/**
	 * Override the default conversion quality  
	 *
	 * @var string
	 * @insertonly
	 */
	public $conversionQuality = null;

	/**
	 * The source type of the entry 
	 *
	 * @var VidiunSourceType
	 * @readonly
	 */
	public $sourceType = null;

	/**
	 * The search provider type used to import this entry
	 *
	 * @var VidiunSearchProviderType
	 * @readonly
	 */
	public $searchProviderType = null;

	/**
	 * The ID of the media in the importing site
	 *
	 * @var string
	 * @readonly
	 */
	public $searchProviderId = null;

	/**
	 * The user name used for credits
	 *
	 * @var string
	 */
	public $creditUserName = null;

	/**
	 * The URL for credits
	 *
	 * @var string
	 */
	public $creditUrl = null;

	/**
	 * The media date extracted from EXIF data (For images) as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $mediaDate = null;

	/**
	 * The URL used for playback. This is not the download URL.
	 *
	 * @var string
	 * @readonly
	 */
	public $dataUrl = null;


}

class VidiunPlayableEntryFilter extends VidiunBaseEntryFilter
{

}

class VidiunMediaEntryFilter extends VidiunPlayableEntryFilter
{
	/**
	 * 
	 *
	 * @var VidiunMediaType
	 */
	public $mediaTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mediaTypeIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaDateLessThanOrEqual = null;


}

class VidiunPlayableEntryOrderBy
{
	const PLAYS_ASC = "+plays";
	const PLAYS_DESC = "-plays";
	const VIEWS_ASC = "+views";
	const VIEWS_DESC = "-views";
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const RANK_ASC = "+rank";
	const RANK_DESC = "-rank";
}

class VidiunMediaEntryOrderBy
{
	const PLAYS_ASC = "+plays";
	const PLAYS_DESC = "-plays";
	const VIEWS_ASC = "+views";
	const VIEWS_DESC = "-views";
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const RANK_ASC = "+rank";
	const RANK_DESC = "-rank";
}

class VidiunMediaListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunMediaEntryArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunMixEntry extends VidiunPlayableEntry
{
	/**
	 * Indicates whether the user has submited a real thumbnail to the mix (Not the one that was generated automaticaly)
	 *
	 * @var bool
	 * @readonly
	 */
	public $hasRealThumbnail = null;

	/**
	 * The editor type used to edit the metadata
	 *
	 * @var VidiunEditorType
	 */
	public $editorType = null;

	/**
	 * The xml data of the mix
	 *
	 * @var string
	 */
	public $dataContent = null;


}

class VidiunMixEntryFilter extends VidiunPlayableEntryFilter
{

}

class VidiunMixEntryOrderBy
{
	const PLAYS_ASC = "+plays";
	const PLAYS_DESC = "-plays";
	const VIEWS_ASC = "+views";
	const VIEWS_DESC = "-views";
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const RANK_ASC = "+rank";
	const RANK_DESC = "-rank";
}

class VidiunMixListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunMixEntryArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunModerationFlag extends VidiunObjectBase
{
	/**
	 * Moderation flag id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The user id that added the moderation flag
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The type of the moderation flag (entry or user)
	 *
	 * @var VidiunModerationObjectType
	 * @readonly
	 */
	public $objectType = null;

	/**
	 * If moderation flag is set for entry, this is the flagged entry id
	 *
	 * @var string
	 */
	public $flaggedEntryId = null;

	/**
	 * If moderation flag is set for user, this is the flagged user id
	 *
	 * @var string
	 */
	public $flaggedUserId = null;

	/**
	 * The moderation flag status
	 *
	 * @var VidiunModerationFlagStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The comment that was added to the flag
	 *
	 * @var string
	 */
	public $comments = null;

	/**
	 * 
	 *
	 * @var VidiunModerationFlagType
	 */
	public $flagType = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;


}

class VidiunModerationFlagListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunModerationFlagArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunNotification extends VidiunBaseJob
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $puserId = null;

	/**
	 * 
	 *
	 * @var VidiunNotificationType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var VidiunNotificationStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationData = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numberOfAttempts = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationResult = null;

	/**
	 * 
	 *
	 * @var VidiunNotificationObjectType
	 */
	public $objectType = null;


}

class VidiunPartner extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $website = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $appearInSearch = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var VidiunCommercialUseType
	 */
	public $commercialUse = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $landingPage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userLandingPage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentCategories = null;

	/**
	 * 
	 *
	 * @var VidiunPartnerType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $phone = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $describeYourself = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $adultContent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defConversionProfileType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $notify = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $allowQuickEdit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mergeEntryLists = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationsConfig = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxUploadSize = null;

	/**
	 * readonly
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * readonly
	 *
	 * @var string
	 */
	public $secret = null;

	/**
	 * readonly
	 *
	 * @var string
	 */
	public $adminSecret = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $cmsPassword = null;


}

class VidiunPartnerUsage extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $hostingGB = null;

	/**
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $Percent = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $packageBW = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $usageGB = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $reachedLimitDate = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $usageGraph = null;


}

class VidiunPlaylist extends VidiunBaseEntry
{
	/**
	 * Content of the playlist - 
	 * XML if the playlistType is dynamic 
	 * text if the playlistType is static 
	 * url if the playlistType is mRss 
	 *
	 * @var string
	 */
	public $playlistContent = null;

	/**
	 * Type of playlist  
	 *
	 * @var VidiunPlaylistType
	 */
	public $playlistType = null;

	/**
	 * Number of plays
	 *
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * Number of views
	 *
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * The duration in seconds
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;


}

class VidiunPlaylistFilter extends VidiunBaseEntryFilter
{

}

class VidiunPlaylistListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunPlaylistArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunPlaylistOrderBy
{
	const NAME_ASC = "+name";
	const NAME_DESC = "-name";
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
	const RANK_ASC = "+rank";
	const RANK_DESC = "-rank";
}

class VidiunReportGraph extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

class VidiunReportInputFilter extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 */
	public $fromDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $toDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $keywords = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $searchInTags = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $searchInAdminTags = null;


}

class VidiunReportTable extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $header = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $data = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunReportTotal extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $header = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $data = null;


}

class VidiunSearch extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $keyWords = null;

	/**
	 * 
	 *
	 * @var VidiunSearchProviderType
	 */
	public $searchSource = null;

	/**
	 * 
	 *
	 * @var VidiunMediaType
	 */
	public $mediaType = null;

	/**
	 * Use this field to pass dynamic data for searching
	 * For example - if you set this field to "mymovies_$partner_id"
	 * The $partner_id will be automatically replcaed with your real partner Id
	 *
	 * @var string
	 */
	public $extraData = null;


}

class VidiunSearchResult extends VidiunSearch
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $credit = null;

	/**
	 * 
	 *
	 * @var VidiunLicenseType
	 */
	public $licenseType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flashPlaybackType = null;


}

class VidiunSearchResultResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunSearchResultArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $needMediaInfo = null;


}

class VidiunStartWidgetSessionResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $vs = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;


}

class VidiunStatsEvent extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $clientVer = null;

	/**
	 * 
	 *
	 * @var VidiunStatsEventType
	 */
	public $eventType = null;

	/**
	 * the client's timestamp of this event
	 *
	 * @var float
	 */
	public $eventTimestamp = null;

	/**
	 * a unique string generated by the client that will represent the client-side session: the primary component will pass it on to other components that sprout from it
	 *
	 * @var string
	 */
	public $sessionId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * the UV cookie - creates in the operational system and should be passed on ofr every event 
	 *
	 * @var string
	 */
	public $uniqueViewer = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $widgetId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiconfId = null;

	/**
	 * the partner's user id 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * the timestamp along the video when the event happend 
	 *
	 * @var int
	 */
	public $currentPoint = null;

	/**
	 * the duration of the video in milliseconds - will make it much faster than quering the db for each entry 
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * will be retrieved from the request of the user 
	 *
	 * @var string
	 * @readonly
	 */
	public $userIp = null;

	/**
	 * the time in milliseconds the event took
	 *
	 * @var int
	 */
	public $processDuration = null;

	/**
	 * the id of the GUI control - will be used in the future to better understand what the user clicked
	 *
	 * @var string
	 */
	public $controlId = null;

	/**
	 * true if the user ever used seek in this session 
	 *
	 * @var bool
	 */
	public $seek = null;

	/**
	 * timestamp of the new point on the timeline of the video after the user seeks 
	 *
	 * @var int
	 */
	public $newPoint = null;

	/**
	 * the referrer of the client
	 *
	 * @var string
	 * @readonly
	 */
	public $referrer = null;

	/**
	 * will indicate if the event is thrown for the first video in the session
	 *
	 * @var bool
	 */
	public $isFirstInSession = null;


}

class VidiunUiConf extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Name of the uiConf, this is not a primary key
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var VidiunUiConfObjType
	 */
	public $objType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $objTypeAsString = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $htmlParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $swfUrl = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $confFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confFile = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confFileFeatures = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confVars = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $useCdn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $swfUrlVersion = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var VidiunUiConfCreationMode
	 */
	public $creationMode = null;


}

class VidiunUiConfFilter extends VidiunFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;


}

class VidiunUiConfListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunUiConfArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunUiConfOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
}

class VidiunUser extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $screenName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dateOfBirth = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $country = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $city = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zip = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Admin tags can be updated only by using an admin session
	 *
	 * @var string
	 */
	public $adminTags = null;

	/**
	 * 
	 *
	 * @var VidiunGender
	 */
	public $gender = null;

	/**
	 * 
	 *
	 * @var VidiunUserStatus
	 */
	public $status = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Can be used to store various partner related data as a string 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $indexedPartnerDataInt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $indexedPartnerDataString = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $storageSize = null;


}

class VidiunUserFilter extends VidiunFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $screenNameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $screenNameStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $emailLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $emailStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;


}

class VidiunUserListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunUserArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunUserOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
}

class VidiunWidget extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceWidgetId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $rootWidgetId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiConfId = null;

	/**
	 * 
	 *
	 * @var VidiunWidgetSecurityType
	 */
	public $securityType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $securityPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Can be used to store various partner related data as a string 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $widgetHTML = null;


}

class VidiunWidgetFilter extends VidiunFilter
{
	/**
	 * 
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceWidgetIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rootWidgetIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiConfIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDataLike = null;


}

class VidiunWidgetListResponse extends VidiunObjectBase
{
	/**
	 * 
	 *
	 * @var VidiunWidgetArray
	 * @readonly
	 */
	public $objects;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $totalCount = null;


}

class VidiunWidgetOrderBy
{
	const CREATED_AT_ASC = "+createdAt";
	const CREATED_AT_DESC = "-createdAt";
}


class VidiunMediaService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function addFromUrl(VidiunMediaEntry $mediaEntry, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("media", "addFromUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromSearchResult(VidiunMediaEntry $mediaEntry = null, VidiunSearchResult $searchResult = null)
	{
		$vparams = array();
		if ($mediaEntry !== null)
			$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		if ($searchResult !== null)
			$this->client->addParam($vparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("media", "addFromSearchResult", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromUploadedFile(VidiunMediaEntry $mediaEntry, $uploadTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->queueServiceActionCall("media", "addFromUploadedFile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function addFromRecordedWebcam(VidiunMediaEntry $mediaEntry, $webcamTokenId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->addParam($vparams, "webcamTokenId", $webcamTokenId);
		$this->client->queueServiceActionCall("media", "addFromRecordedWebcam", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("media", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function update($entryId, VidiunMediaEntry $mediaEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "mediaEntry", $mediaEntry->toParams());
		$this->client->queueServiceActionCall("media", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunMediaEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaListResponse");
		return $resultObject;
	}

	function upload($fileData)
	{
		$vparams = array();
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "upload", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function updateThumbnail($entryId, $timeOffset)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "timeOffset", $timeOffset);
		$this->client->queueServiceActionCall("media", "updateThumbnail", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function updateThumbnailJpeg($entryId, $fileData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$vfiles = array();
		$this->client->addParam($vfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("media", "updateThumbnailJpeg", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMediaEntry");
		return $resultObject;
	}

	function requestConversion($entryId, $fileFormat)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "fileFormat", $fileFormat);
		$this->client->queueServiceActionCall("media", "requestConversion", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "int");
		return $resultObject;
	}

	function flag(VidiunModerationFlag $moderationFlag)
	{
		$vparams = array();
		$this->client->addParam($vparams, "moderationFlag", $moderationFlag->toParams());
		$this->client->queueServiceActionCall("media", "flag", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reject($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "reject", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function approve($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("media", "approve", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listFlags($entryId, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("media", "listFlags", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunModerationFlagListResponse");
		return $resultObject;
	}
}

class VidiunMixingService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function add(VidiunMixEntry $mixEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function update($entryId, VidiunMixEntry $mixEntry)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "mixEntry", $mixEntry->toParams());
		$this->client->queueServiceActionCall("mixing", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunMixEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("mixing", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixListResponse");
		return $resultObject;
	}

	function cloneAction($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("mixing", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function appendMediaEntry($mixEntryId, $mediaEntryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mixEntryId", $mixEntryId);
		$this->client->addParam($vparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "appendMediaEntry", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMixEntry");
		return $resultObject;
	}

	function requestFlattening($entryId, $fileFormat, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "fileFormat", $fileFormat);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "requestFlattening", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "int");
		return $resultObject;
	}

	function getMixesByMediaId($mediaEntryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaEntryId", $mediaEntryId);
		$this->client->queueServiceActionCall("mixing", "getMixesByMediaId", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getReadyMediaEntries($mixId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mixId", $mixId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("mixing", "getReadyMediaEntries", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}
}

class VidiunBaseEntryService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function addFromUploadedFile(VidiunBaseEntry $entry, $uploadTokenId, $type = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entry", $entry->toParams());
		$this->client->addParam($vparams, "uploadTokenId", $uploadTokenId);
		$this->client->addParam($vparams, "type", $type);
		$this->client->queueServiceActionCall("baseentry", "addFromUploadedFile", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function get($entryId, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("baseentry", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntry");
		return $resultObject;
	}

	function getByIds($entryIds)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryIds", $entryIds);
		$this->client->queueServiceActionCall("baseentry", "getByIds", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function delete($entryId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("baseentry", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunBaseEntryFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("baseentry", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBaseEntryListResponse");
		return $resultObject;
	}
}

class VidiunSessionService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function start($secret, $userId = "", $type = 0, $partnerId = -1, $expiry = 86400, $privileges = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "secret", $secret);
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "type", $type);
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "expiry", $expiry);
		$this->client->addParam($vparams, "privileges", $privileges);
		$this->client->queueServiceActionCall("session", "start", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}

	function startWidgetSession($widgetId, $expiry = 86400)
	{
		$vparams = array();
		$this->client->addParam($vparams, "widgetId", $widgetId);
		$this->client->addParam($vparams, "expiry", $expiry);
		$this->client->queueServiceActionCall("session", "startWidgetSession", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunStartWidgetSessionResponse");
		return $resultObject;
	}
}

class VidiunUiConfService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function add(VidiunUiConf $uiConf)
	{
		$vparams = array();
		$this->client->addParam($vparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function update($id, VidiunUiConf $uiConf)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "uiConf", $uiConf->toParams());
		$this->client->queueServiceActionCall("uiconf", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function cloneAction($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("uiconf", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConf");
		return $resultObject;
	}

	function listAction(VidiunUiConfFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("uiconf", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUiConfListResponse");
		return $resultObject;
	}
}

class VidiunPlaylistService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function add(VidiunPlaylist $playlist, $updateStats = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "playlist", $playlist->toParams());
		$this->client->addParam($vparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}

	function get($id, $version = -1)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "version", $version);
		$this->client->queueServiceActionCall("playlist", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}

	function update($id, VidiunPlaylist $playlist, $updateStats = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "playlist", $playlist->toParams());
		$this->client->addParam($vparams, "updateStats", $updateStats);
		$this->client->queueServiceActionCall("playlist", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}

	function delete($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("playlist", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function listAction(VidiunPlaylistFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("playlist", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylistListResponse");
		return $resultObject;
	}

	function execute($id, $detailed = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "execute", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function executeFromContent($playlistType, $playlistContent, $detailed = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "playlistType", $playlistType);
		$this->client->addParam($vparams, "playlistContent", $playlistContent);
		$this->client->addParam($vparams, "detailed", $detailed);
		$this->client->queueServiceActionCall("playlist", "executeFromContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getStatsFromContent($playlistType, $playlistContent)
	{
		$vparams = array();
		$this->client->addParam($vparams, "playlistType", $playlistType);
		$this->client->addParam($vparams, "playlistContent", $playlistContent);
		$this->client->queueServiceActionCall("playlist", "getStatsFromContent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPlaylist");
		return $resultObject;
	}
}

class VidiunUserService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function add(VidiunUser $user)
	{
		$vparams = array();
		$this->client->addParam($vparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function update($userId, VidiunUser $user)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->addParam($vparams, "user", $user->toParams());
		$this->client->queueServiceActionCall("user", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function get($userId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function delete($userId)
	{
		$vparams = array();
		$this->client->addParam($vparams, "userId", $userId);
		$this->client->queueServiceActionCall("user", "delete", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUser");
		return $resultObject;
	}

	function listAction(VidiunUserFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("user", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunUserListResponse");
		return $resultObject;
	}
}

class VidiunWidgetService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function add(VidiunWidget $widget)
	{
		$vparams = array();
		$this->client->addParam($vparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "add", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function update($id, VidiunWidget $widget)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("widget", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function cloneAction(VidiunWidget $widget)
	{
		$vparams = array();
		$this->client->addParam($vparams, "widget", $widget->toParams());
		$this->client->queueServiceActionCall("widget", "clone", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidget");
		return $resultObject;
	}

	function listAction(VidiunWidgetFilter $filter = null, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($filter !== null)
			$this->client->addParam($vparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("widget", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunWidgetListResponse");
		return $resultObject;
	}
}

class VidiunSearchService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function search(VidiunSearch $search, VidiunFilterPager $pager = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "search", $search->toParams());
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("search", "search", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSearchResultResponse");
		return $resultObject;
	}

	function getMediaInfo(VidiunSearchResult $searchResult)
	{
		$vparams = array();
		$this->client->addParam($vparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("search", "getMediaInfo", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSearchResult");
		return $resultObject;
	}

	function searchUrl($mediaType, $url)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mediaType", $mediaType);
		$this->client->addParam($vparams, "url", $url);
		$this->client->queueServiceActionCall("search", "searchUrl", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunSearchResult");
		return $resultObject;
	}
}

class VidiunPartnerService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function register(VidiunPartner $partner, $cmsPassword = "")
	{
		$vparams = array();
		$this->client->addParam($vparams, "partner", $partner->toParams());
		$this->client->addParam($vparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "register", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function update(VidiunPartner $partner, $allowEmpty = false)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partner", $partner->toParams());
		$this->client->addParam($vparams, "allowEmpty", $allowEmpty);
		$this->client->queueServiceActionCall("partner", "update", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function getSecrets($partnerId, $adminEmail, $cmsPassword)
	{
		$vparams = array();
		$this->client->addParam($vparams, "partnerId", $partnerId);
		$this->client->addParam($vparams, "adminEmail", $adminEmail);
		$this->client->addParam($vparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "getSecrets", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function getInfo()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("partner", "getInfo", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartner");
		return $resultObject;
	}

	function getUsage($year, $month = 1, $resolution = "days")
	{
		$vparams = array();
		$this->client->addParam($vparams, "year", $year);
		$this->client->addParam($vparams, "month", $month);
		$this->client->addParam($vparams, "resolution", $resolution);
		$this->client->queueServiceActionCall("partner", "getUsage", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunPartnerUsage");
		return $resultObject;
	}
}

class VidiunAdminUserService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function updatepassword($email, $password, $newEmail = "", $newPassword = "")
	{
		$vparams = array();
		$this->client->addParam($vparams, "email", $email);
		$this->client->addParam($vparams, "password", $password);
		$this->client->addParam($vparams, "newEmail", $newEmail);
		$this->client->addParam($vparams, "newPassword", $newPassword);
		$this->client->queueServiceActionCall("adminuser", "updatepassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunAdminUser");
		return $resultObject;
	}

	function resetPassword($email)
	{
		$vparams = array();
		$this->client->addParam($vparams, "email", $email);
		$this->client->queueServiceActionCall("adminuser", "resetPassword", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function login($email, $password)
	{
		$vparams = array();
		$this->client->addParam($vparams, "email", $email);
		$this->client->addParam($vparams, "password", $password);
		$this->client->queueServiceActionCall("adminuser", "login", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class VidiunSystemService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function ping()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("system", "ping", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "bool");
		return $resultObject;
	}
}

class VidiunBulkUploadService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function add($conversionProfileId, $csvFileData)
	{
		$vparams = array();
		$this->client->addParam($vparams, "conversionProfileId", $conversionProfileId);
		$vfiles = array();
		$this->client->addParam($vfiles, "csvFileData", $csvFileData);
		$this->client->queueServiceActionCall("bulkupload", "add", $vparams, $vfiles);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUpload");
		return $resultObject;
	}

	function get($id)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "get", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUpload");
		return $resultObject;
	}

	function listAction(VidiunFilterPager $pager = null)
	{
		$vparams = array();
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("bulkupload", "list", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBulkUploadListResponse");
		return $resultObject;
	}
}

class VidiunNotificationService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function getClientNotification($entryId, $type)
	{
		$vparams = array();
		$this->client->addParam($vparams, "entryId", $entryId);
		$this->client->addParam($vparams, "type", $type);
		$this->client->queueServiceActionCall("notification", "getClientNotification", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunClientNotification");
		return $resultObject;
	}
}

class VidiunBatchService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function addImportJob(VidiunBatchJob $importJob)
	{
		$vparams = array();
		$this->client->addParam($vparams, "importJob", $importJob->toParams());
		$this->client->queueServiceActionCall("batch", "addImportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function getExclusiveImportJobs($processorLocation, $pocessorName, $maxExecutionTime, $numberOfJobs, $partnerGroups)
	{
		$vparams = array();
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		$this->client->addParam($vparams, "partnerGroups", $partnerGroups);
		$this->client->queueServiceActionCall("batch", "getExclusiveImportJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveImportJob($id, $processorLocation, $pocessorName, VidiunBatchJob $importJob, $entryStatus = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "importJob", $importJob->toParams());
		$this->client->addParam($vparams, "entryStatus", $entryStatus);
		$this->client->queueServiceActionCall("batch", "updateExclusiveImportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusiveImportJob($id, $processorLocation, $pocessorName)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->queueServiceActionCall("batch", "freeExclusiveImportJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function addPreConvertJob(VidiunBatchJob $preConvertJob)
	{
		$vparams = array();
		$this->client->addParam($vparams, "preConvertJob", $preConvertJob->toParams());
		$this->client->queueServiceActionCall("batch", "addPreConvertJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function getExclusivePreConvertJobs($processorLocation, $pocessorName, $maxExecutionTime, $numberOfJobs, $partnerGroups)
	{
		$vparams = array();
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		$this->client->addParam($vparams, "partnerGroups", $partnerGroups);
		$this->client->queueServiceActionCall("batch", "getExclusivePreConvertJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusivePreConvertJob($id, $processorLocation, $pocessorName, VidiunBatchJob $preConvertJob, $entryStatus = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "preConvertJob", $preConvertJob->toParams());
		$this->client->addParam($vparams, "entryStatus", $entryStatus);
		$this->client->queueServiceActionCall("batch", "updateExclusivePreConvertJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function freeExclusivePreConvertJob($id, $processorLocation, $pocessorName)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->queueServiceActionCall("batch", "freeExclusivePreConvertJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function createNotification(VidiunNotification $notificationJob)
	{
		$vparams = array();
		$this->client->addParam($vparams, "notificationJob", $notificationJob->toParams());
		$this->client->queueServiceActionCall("batch", "createNotification", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getExclusiveNotificationJobs($processorLocation, $pocessorName, $maxExecutionTime, $numberOfJobs, $partnerGroups)
	{
		$vparams = array();
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		$this->client->addParam($vparams, "partnerGroups", $partnerGroups);
		$this->client->queueServiceActionCall("batch", "getExclusiveNotificationJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchGetExclusiveNotificationJobsResponse");
		return $resultObject;
	}

	function updateExclusiveNotificationJob($id, $processorLocation, $pocessorName, VidiunNotification $notificationJob)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "notificationJob", $notificationJob->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveNotificationJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunNotification");
		return $resultObject;
	}

	function freeExclusiveNotificationJob($id, $processorLocation, $pocessorName, VidiunNotification $notificationJob = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		if ($notificationJob !== null)
			$this->client->addParam($vparams, "notificationJob", $notificationJob->toParams());
		$this->client->queueServiceActionCall("batch", "freeExclusiveNotificationJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunBatchJob");
		return $resultObject;
	}

	function addMailJob(VidiunMailJob $mailJob)
	{
		$vparams = array();
		$this->client->addParam($vparams, "mailJob", $mailJob->toParams());
		$this->client->queueServiceActionCall("batch", "addMailJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function getExclusiveMailJobs($processorLocation, $pocessorName, $maxExecutionTime, $numberOfJobs, $partnerGroups)
	{
		$vparams = array();
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "maxExecutionTime", $maxExecutionTime);
		$this->client->addParam($vparams, "numberOfJobs", $numberOfJobs);
		$this->client->addParam($vparams, "partnerGroups", $partnerGroups);
		$this->client->queueServiceActionCall("batch", "getExclusiveMailJobs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function updateExclusiveMailJob($id, $processorLocation, $pocessorName, VidiunMailJob $mailJob)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->addParam($vparams, "mailJob", $mailJob->toParams());
		$this->client->queueServiceActionCall("batch", "updateExclusiveMailJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMailJob");
		return $resultObject;
	}

	function freeExclusiveMailJob($id, $processorLocation, $pocessorName)
	{
		$vparams = array();
		$this->client->addParam($vparams, "id", $id);
		$this->client->addParam($vparams, "processorLocation", $processorLocation);
		$this->client->addParam($vparams, "pocessorName", $pocessorName);
		$this->client->queueServiceActionCall("batch", "freeExclusiveMailJob", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunMailJob");
		return $resultObject;
	}
}

class VidiunReportService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function getGraph()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("report", "getGraph", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunReportGraph");
		return $resultObject;
	}

	function getGraphs($reportType, VidiunReportInputFilter $reportInputFilter, $dimension = null, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "dimension", $dimension);
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getGraphs", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "array");
		return $resultObject;
	}

	function getTotal($reportType, VidiunReportInputFilter $reportInputFilter, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTotal", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunReportTotal");
		return $resultObject;
	}

	function getTable($reportType, VidiunReportInputFilter $reportInputFilter, VidiunFilterPager $pager, $order = null, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->addParam($vparams, "order", $order);
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getTable", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunReportTable");
		return $resultObject;
	}

	function getUrlForReportAsCsv($reportTitle, $reportText, $headers, $reportType, VidiunReportInputFilter $reportInputFilter, $dimension = null, VidiunFilterPager $pager = null, $order = null, $objectIds = null)
	{
		$vparams = array();
		$this->client->addParam($vparams, "reportTitle", $reportTitle);
		$this->client->addParam($vparams, "reportText", $reportText);
		$this->client->addParam($vparams, "headers", $headers);
		$this->client->addParam($vparams, "reportType", $reportType);
		$this->client->addParam($vparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($vparams, "dimension", $dimension);
		if ($pager !== null)
			$this->client->addParam($vparams, "pager", $pager->toParams());
		$this->client->addParam($vparams, "order", $order);
		$this->client->addParam($vparams, "objectIds", $objectIds);
		$this->client->queueServiceActionCall("report", "getUrlForReportAsCsv", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "string");
		return $resultObject;
	}
}

class VidiunConversionProfileService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function addCurrent(VidiunConversionProfile $conversionProfile)
	{
		$vparams = array();
		$this->client->addParam($vparams, "conversionProfile", $conversionProfile->toParams());
		$this->client->queueServiceActionCall("conversionprofile", "addCurrent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfile");
		return $resultObject;
	}

	function getCurrent()
	{
		$vparams = array();
		$this->client->queueServiceActionCall("conversionprofile", "getCurrent", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunConversionProfile");
		return $resultObject;
	}
}

class VidiunStatsService extends VidiunServiceBase
{
	function __construct(VidiunClient $client)
	{
		parent::__construct($client);
	}

	function collect(VidiunStatsEvent $event)
	{
		$vparams = array();
		$this->client->addParam($vparams, "event", $event->toParams());
		$this->client->queueServiceActionCall("stats", "collect", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "null");
		return $resultObject;
	}

	function reportVceError(VidiunCEError $vidiunCEError)
	{
		$vparams = array();
		$this->client->addParam($vparams, "vidiunCEError", $vidiunCEError->toParams());
		$this->client->queueServiceActionCall("stats", "reportVceError", $vparams);
		if ($this->client->isMultiRequest())
			return null;
		$resultObject = $this->client->doQueue();
		$this->client->throwExceptionIfError($resultObject);
		$this->client->validateObjectType($resultObject, "VidiunCEError");
		return $resultObject;
	}
}

class VidiunClient extends VidiunClientBase
{
	/**
	 * Media service lets you upload and manage media files (images / videos & audio)
	 *
	 * @var VidiunMediaService
	 */
	public $media = null;

	/**
	 * A Mix is an XML unique format invented by Vidiun, it allows the user to create a mix of videos and images, in and out points, transitions, text overlays, soundtrack, effects and much more...
	 * Mixing service lets you create a new mix, manage its metadata and make basic manipulations.   
	 *
	 * @var VidiunMixingService
	 */
	public $mixing = null;

	/**
	 * Base Entry Service
	 *
	 * @var VidiunBaseEntryService
	 */
	public $baseEntry = null;

	/**
	 * Session service
	 *
	 * @var VidiunSessionService
	 */
	public $session = null;

	/**
	 * UiConf service lets you create and manage your UIConfs for the various flash components
	 * This service is used by the VMC-ApplicationStudio
	 *
	 * @var VidiunUiConfService
	 */
	public $uiConf = null;

	/**
	 * Playlist service lets you create,manage and play your playlists
	 * Playlists could be static (containing a fixed list of entries) or dynamic (baseed on a filter)
	 *
	 * @var VidiunPlaylistService
	 */
	public $playlist = null;

	/**
	 * Manage partner users on Vidiun's side
	 * The userId in vidiun is the unique Id in the partner's system, and the [partnerId,Id] couple are unique key in vidiun's DB
	 *
	 * @var VidiunUserService
	 */
	public $user = null;

	/**
	 * widget service for full widget management
	 *
	 * @var VidiunWidgetService
	 */
	public $widget = null;

	/**
	 * Search service allows you to search for media in various media providers
	 * This service is being used mostly by the CW component
	 *
	 * @var VidiunSearchService
	 */
	public $search = null;

	/**
	 * partner service allows you to change/manage your partner personal details and settings as well
	 *
	 * @var VidiunPartnerService
	 */
	public $partner = null;

	/**
	 * adminuser service
	 *
	 * @var VidiunAdminUserService
	 */
	public $adminUser = null;

	/**
	 * System Service
	 *
	 * @var VidiunSystemService
	 */
	public $system = null;

	/**
	 * Bulk Upload Service
	 *
	 * @var VidiunBulkUploadService
	 */
	public $bulkUpload = null;

	/**
	 * Notification Service
	 *
	 * @var VidiunNotificationService
	 */
	public $notification = null;

	/**
	 * batch service lets you handle different batch process from remote machines.
	 * As oppesed to other ojects in the system, locking mechanism is critical in this case.
	 * For this reason the GetExclusiveXXX , UpdateExclusiveXXX and FreeExclusiveXXX actions are important for the system's intergity.
	 * In general - updating batch object should be done only using the UpdateExclusiveXXX which in turn can be called only after 
	 * acuiring a batch objet properly (using  GetExclusiveXXX).
	 * If an object was aquired and should be returned to the pool in it's initial state - use the FreeExclusiveXXX action 
	 *
	 * @var VidiunBatchService
	 */
	public $batch = null;

	/**
	 * api for getting reports data by the report type and some inputFilter
	 *
	 * @var VidiunReportService
	 */
	public $report = null;

	/**
	 * Conversion Profile Service
	 *
	 * @var VidiunConversionProfileService
	 */
	public $conversionProfile = null;

	/**
	 * Stats Service
	 *
	 * @var VidiunStatsService
	 */
	public $stats = null;


	public function __construct(VidiunConfiguration $config)
	{
		parent::__construct($config);
		$this->media = new VidiunMediaService($this);
		$this->mixing = new VidiunMixingService($this);
		$this->baseEntry = new VidiunBaseEntryService($this);
		$this->session = new VidiunSessionService($this);
		$this->uiConf = new VidiunUiConfService($this);
		$this->playlist = new VidiunPlaylistService($this);
		$this->user = new VidiunUserService($this);
		$this->widget = new VidiunWidgetService($this);
		$this->search = new VidiunSearchService($this);
		$this->partner = new VidiunPartnerService($this);
		$this->adminUser = new VidiunAdminUserService($this);
		$this->system = new VidiunSystemService($this);
		$this->bulkUpload = new VidiunBulkUploadService($this);
		$this->notification = new VidiunNotificationService($this);
		$this->batch = new VidiunBatchService($this);
		$this->report = new VidiunReportService($this);
		$this->conversionProfile = new VidiunConversionProfileService($this);
		$this->stats = new VidiunStatsService($this);
	}
}
