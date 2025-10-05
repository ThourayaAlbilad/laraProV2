<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * @property int $id
 * @property string $bank_name
 * @property string|null $bank_email
 * @property string|null $bank_code
 * @property string $bank_type
 * @property string $country
 * @property string $city
 * @property string|null $bank_branch
 * @property string|null $bank_address
 * @property string|null $relationship
 * @property string $status
 * @property string|null $account_manager_name
 * @property string|null $credit_rating
 * @property bool $enable_auto_sync
 * @property bool $is_primary_bank
 * @property string|null $notes
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank autoSyncEnabled()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank inCountry($country)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank ofType($type)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank primary()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereAccountManagerName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereBankAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereBankBranch($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereBankCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereBankEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereBankName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereBankType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereCreditRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereEnableAutoSync($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereIsPrimaryBank($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereRelationship($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Bank whereUserId($value)
 * @mixin \Eloquent
 */
	class Bank extends \Eloquent {}
}

namespace App\Models{
/**
 * @property int $id
 * @property string $name
 * @property string|null $first_name
 * @property string|null $last_name
 * @property string $email
 * @property string|null $username
 * @property string|null $bio
 * @property string|null $phone
 * @property string|null $website
 * @property string|null $location
 * @property string|null $timezone
 * @property \Illuminate\Support\Carbon|null $birthday
 * @property string|null $avatar
 * @property string|null $avatar_url
 * @property bool $profile_public
 * @property bool $show_email
 * @property bool $allow_messages
 * @property bool $email_notifications
 * @property bool $push_notifications
 * @property bool $sms_notifications
 * @property bool $marketing_emails
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Bank> $banks
 * @property-read int|null $banks_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAllowMessages($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereAvatarUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBio($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereBirthday($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereMarketingEmails($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereProfilePublic($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePushNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereShowEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereSmsNotifications($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTimezone($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereWebsite($value)
 * @mixin \Eloquent
 */
	class User extends \Eloquent {}
}

