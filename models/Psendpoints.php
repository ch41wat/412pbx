<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ps_endpoints".
 *
 * @property string $id
 * @property string $transport
 * @property string $aors
 * @property string $auth
 * @property string $context
 * @property string $disallow
 * @property string $allow
 * @property string $direct_media
 * @property string $connected_line_method
 * @property string $direct_media_method
 * @property string $direct_media_glare_mitigation
 * @property string $disable_direct_media_on_nat
 * @property string $dtmf_mode
 * @property string $external_media_address
 * @property string $force_rport
 * @property string $ice_support
 * @property string $identify_by
 * @property string $mailboxes
 * @property string $moh_suggest
 * @property string $outbound_auth
 * @property string $outbound_proxy
 * @property string $rewrite_contact
 * @property string $rtp_ipv6
 * @property string $rtp_symmetric
 * @property string $send_diversion
 * @property string $send_pai
 * @property string $send_rpid
 * @property int $timers_min_se
 * @property string $timers
 * @property int $timers_sess_expires
 * @property string $callerid
 * @property string $callerid_privacy
 * @property string $callerid_tag
 * @property string $100rel
 * @property string $aggregate_mwi
 * @property string $trust_id_inbound
 * @property string $trust_id_outbound
 * @property string $use_ptime
 * @property string $use_avpf
 * @property string $media_encryption
 * @property string $inband_progress
 * @property string $call_group
 * @property string $pickup_group
 * @property string $named_call_group
 * @property string $named_pickup_group
 * @property int $device_state_busy_at
 * @property string $fax_detect
 * @property string $t38_udptl
 * @property string $t38_udptl_ec
 * @property int $t38_udptl_maxdatagram
 * @property string $t38_udptl_nat
 * @property string $t38_udptl_ipv6
 * @property string $tone_zone
 * @property string $language
 * @property string $one_touch_recording
 * @property string $record_on_feature
 * @property string $record_off_feature
 * @property string $rtp_engine
 * @property string $allow_transfer
 * @property string $allow_subscribe
 * @property string $sdp_owner
 * @property string $sdp_session
 * @property string $tos_audio
 * @property string $tos_video
 * @property int $sub_min_expiry
 * @property string $from_domain
 * @property string $from_user
 * @property string $mwi_from_user
 * @property string $dtls_verify
 * @property string $dtls_rekey
 * @property string $dtls_cert_file
 * @property string $dtls_private_key
 * @property string $dtls_cipher
 * @property string $dtls_ca_file
 * @property string $dtls_ca_path
 * @property string $dtls_setup
 * @property string $srtp_tag_32
 * @property string $media_address
 * @property string $redirect_method
 * @property string $set_var
 * @property int $cos_audio
 * @property int $cos_video
 * @property string $message_context
 * @property string $force_avp
 * @property string $media_use_received_transport
 * @property string $accountcode
 * @property string $user_eq_phone
 * @property string $moh_passthrough
 * @property string $media_encryption_optimistic
 * @property string $rpid_immediate
 * @property string $g726_non_standard
 * @property int $rtp_keepalive
 * @property int $rtp_timeout
 * @property int $rtp_timeout_hold
 * @property string $bind_rtp_to_media_address
 * @property string $voicemail_extension
 * @property int $mwi_subscribe_replaces_unsolicited
 * @property string $deny
 * @property string $permit
 * @property string $acl
 * @property string $contact_deny
 * @property string $contact_permit
 * @property string $contact_acl
 * @property string $subscribe_context
 * @property int $fax_detect_timeout
 * @property string $contact_user
 * @property string $preferred_codec_only
 * @property string $asymmetric_rtp_codec
 * @property string $rtcp_mux
 * @property string $allow_overlap
 * @property string $refer_blind_progress
 * @property string $notify_early_inuse_ringing
 * @property int $max_audio_streams
 * @property int $max_video_streams
 * @property string $webrtc
 * @property string $dtls_fingerprint
 * @property string $incoming_mwi_mailbox
 * @property string $bundle
 * @property string $dtls_auto_generate_cert
 */
class Psendpoints extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ps_endpoints';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'required'],
            [['direct_media', 'connected_line_method', 'direct_media_method', 'direct_media_glare_mitigation', 'disable_direct_media_on_nat', 'dtmf_mode', 'force_rport', 'ice_support', 'rewrite_contact', 'rtp_ipv6', 'rtp_symmetric', 'send_diversion', 'send_pai', 'send_rpid', 'timers', 'callerid_privacy', '100rel', 'aggregate_mwi', 'trust_id_inbound', 'trust_id_outbound', 'use_ptime', 'use_avpf', 'media_encryption', 'inband_progress', 'fax_detect', 't38_udptl', 't38_udptl_ec', 't38_udptl_nat', 't38_udptl_ipv6', 'one_touch_recording', 'allow_transfer', 'allow_subscribe', 'dtls_setup', 'srtp_tag_32', 'redirect_method', 'set_var', 'force_avp', 'media_use_received_transport', 'user_eq_phone', 'moh_passthrough', 'media_encryption_optimistic', 'rpid_immediate', 'g726_non_standard', 'bind_rtp_to_media_address', 'preferred_codec_only', 'asymmetric_rtp_codec', 'rtcp_mux', 'allow_overlap', 'refer_blind_progress', 'notify_early_inuse_ringing', 'webrtc', 'dtls_fingerprint', 'bundle', 'dtls_auto_generate_cert'], 'string'],
            [['timers_min_se', 'timers_sess_expires', 'device_state_busy_at', 't38_udptl_maxdatagram', 'sub_min_expiry', 'cos_audio', 'cos_video', 'rtp_keepalive', 'rtp_timeout', 'rtp_timeout_hold', 'mwi_subscribe_replaces_unsolicited', 'fax_detect_timeout', 'max_audio_streams', 'max_video_streams'], 'integer'],
            [['id', 'transport', 'auth', 'context', 'external_media_address', 'mailboxes', 'moh_suggest', 'outbound_auth', 'outbound_proxy', 'callerid', 'callerid_tag', 'call_group', 'pickup_group', 'named_call_group', 'named_pickup_group', 'tone_zone', 'language', 'record_on_feature', 'record_off_feature', 'rtp_engine', 'sdp_owner', 'sdp_session', 'from_domain', 'from_user', 'mwi_from_user', 'dtls_verify', 'dtls_rekey', 'media_address', 'message_context', 'voicemail_extension', 'acl', 'contact_acl', 'subscribe_context', 'incoming_mwi_mailbox'], 'string', 'max' => 40],
            [['aors', 'disallow', 'allow', 'dtls_cert_file', 'dtls_private_key', 'dtls_cipher', 'dtls_ca_file', 'dtls_ca_path'], 'string', 'max' => 200],
            [['identify_by', 'accountcode', 'contact_user'], 'string', 'max' => 80],
            [['tos_audio', 'tos_video'], 'string', 'max' => 10],
            [['deny', 'permit', 'contact_deny', 'contact_permit'], 'string', 'max' => 95],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transport' => 'Transport',
            'aors' => 'Aors',
            'auth' => 'Auth',
            'context' => 'Context',
            'disallow' => 'Disallow',
            'allow' => 'Allow',
            'direct_media' => 'Direct Media',
            'connected_line_method' => 'Connected Line Method',
            'direct_media_method' => 'Direct Media Method',
            'direct_media_glare_mitigation' => 'Direct Media Glare Mitigation',
            'disable_direct_media_on_nat' => 'Disable Direct Media On Nat',
            'dtmf_mode' => 'Dtmf Mode',
            'external_media_address' => 'External Media Address',
            'force_rport' => 'Force Rport',
            'ice_support' => 'Ice Support',
            'identify_by' => 'Identify By',
            'mailboxes' => 'Mailboxes',
            'moh_suggest' => 'Moh Suggest',
            'outbound_auth' => 'Outbound Auth',
            'outbound_proxy' => 'Outbound Proxy',
            'rewrite_contact' => 'Rewrite Contact',
            'rtp_ipv6' => 'Rtp Ipv6',
            'rtp_symmetric' => 'Rtp Symmetric',
            'send_diversion' => 'Send Diversion',
            'send_pai' => 'Send Pai',
            'send_rpid' => 'Send Rpid',
            'timers_min_se' => 'Timers Min Se',
            'timers' => 'Timers',
            'timers_sess_expires' => 'Timers Sess Expires',
            'callerid' => 'Callerid',
            'callerid_privacy' => 'Callerid Privacy',
            'callerid_tag' => 'Callerid Tag',
            '100rel' => '100rel',
            'aggregate_mwi' => 'Aggregate Mwi',
            'trust_id_inbound' => 'Trust Id Inbound',
            'trust_id_outbound' => 'Trust Id Outbound',
            'use_ptime' => 'Use Ptime',
            'use_avpf' => 'Use Avpf',
            'media_encryption' => 'Media Encryption',
            'inband_progress' => 'Inband Progress',
            'call_group' => 'Call Group',
            'pickup_group' => 'Pickup Group',
            'named_call_group' => 'Named Call Group',
            'named_pickup_group' => 'Named Pickup Group',
            'device_state_busy_at' => 'Device State Busy At',
            'fax_detect' => 'Fax Detect',
            't38_udptl' => 'T38 Udptl',
            't38_udptl_ec' => 'T38 Udptl Ec',
            't38_udptl_maxdatagram' => 'T38 Udptl Maxdatagram',
            't38_udptl_nat' => 'T38 Udptl Nat',
            't38_udptl_ipv6' => 'T38 Udptl Ipv6',
            'tone_zone' => 'Tone Zone',
            'language' => 'Language',
            'one_touch_recording' => 'One Touch Recording',
            'record_on_feature' => 'Record On Feature',
            'record_off_feature' => 'Record Off Feature',
            'rtp_engine' => 'Rtp Engine',
            'allow_transfer' => 'Allow Transfer',
            'allow_subscribe' => 'Allow Subscribe',
            'sdp_owner' => 'Sdp Owner',
            'sdp_session' => 'Sdp Session',
            'tos_audio' => 'Tos Audio',
            'tos_video' => 'Tos Video',
            'sub_min_expiry' => 'Sub Min Expiry',
            'from_domain' => 'From Domain',
            'from_user' => 'From User',
            'mwi_from_user' => 'Mwi From User',
            'dtls_verify' => 'Dtls Verify',
            'dtls_rekey' => 'Dtls Rekey',
            'dtls_cert_file' => 'Dtls Cert File',
            'dtls_private_key' => 'Dtls Private Key',
            'dtls_cipher' => 'Dtls Cipher',
            'dtls_ca_file' => 'Dtls Ca File',
            'dtls_ca_path' => 'Dtls Ca Path',
            'dtls_setup' => 'Dtls Setup',
            'srtp_tag_32' => 'Srtp Tag 32',
            'media_address' => 'Media Address',
            'redirect_method' => 'Redirect Method',
            'set_var' => 'Set Var',
            'cos_audio' => 'Cos Audio',
            'cos_video' => 'Cos Video',
            'message_context' => 'Message Context',
            'force_avp' => 'Force Avp',
            'media_use_received_transport' => 'Media Use Received Transport',
            'accountcode' => 'Accountcode',
            'user_eq_phone' => 'User Eq Phone',
            'moh_passthrough' => 'Moh Passthrough',
            'media_encryption_optimistic' => 'Media Encryption Optimistic',
            'rpid_immediate' => 'Rpid Immediate',
            'g726_non_standard' => 'G726 Non Standard',
            'rtp_keepalive' => 'Rtp Keepalive',
            'rtp_timeout' => 'Rtp Timeout',
            'rtp_timeout_hold' => 'Rtp Timeout Hold',
            'bind_rtp_to_media_address' => 'Bind Rtp To Media Address',
            'voicemail_extension' => 'Voicemail Extension',
            'mwi_subscribe_replaces_unsolicited' => 'Mwi Subscribe Replaces Unsolicited',
            'deny' => 'Deny',
            'permit' => 'Permit',
            'acl' => 'Acl',
            'contact_deny' => 'Contact Deny',
            'contact_permit' => 'Contact Permit',
            'contact_acl' => 'Contact Acl',
            'subscribe_context' => 'Subscribe Context',
            'fax_detect_timeout' => 'Fax Detect Timeout',
            'contact_user' => 'Contact User',
            'preferred_codec_only' => 'Preferred Codec Only',
            'asymmetric_rtp_codec' => 'Asymmetric Rtp Codec',
            'rtcp_mux' => 'Rtcp Mux',
            'allow_overlap' => 'Allow Overlap',
            'refer_blind_progress' => 'Refer Blind Progress',
            'notify_early_inuse_ringing' => 'Notify Early Inuse Ringing',
            'max_audio_streams' => 'Max Audio Streams',
            'max_video_streams' => 'Max Video Streams',
            'webrtc' => 'Webrtc',
            'dtls_fingerprint' => 'Dtls Fingerprint',
            'incoming_mwi_mailbox' => 'Incoming Mwi Mailbox',
            'bundle' => 'Bundle',
            'dtls_auto_generate_cert' => 'Dtls Auto Generate Cert',
        ];
    }
}
