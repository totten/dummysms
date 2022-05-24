-- +--------------------------------------------------------------------+
-- | Copyright CiviCRM LLC. All rights reserved.                        |
-- |                                                                    |
-- | This work is published under the GNU AGPLv3 license with some      |
-- | permitted exceptions and without any warranty. For full license    |
-- | and copyright information, see https://civicrm.org/licensing       |
-- +--------------------------------------------------------------------+
--
-- Generated from schema.tpl
-- DO NOT EDIT.  Generated by CRM_Core_CodeGen
--
-- /*******************************************************
-- *
-- * Clean up the existing tables - this section generated from drop.tpl
-- *
-- *******************************************************/

SET FOREIGN_KEY_CHECKS=0;

DROP TABLE IF EXISTS `civicrm_dummysms_message`;

SET FOREIGN_KEY_CHECKS=1;
-- /*******************************************************
-- *
-- * Create new tables
-- *
-- *******************************************************/

-- /*******************************************************
-- *
-- * civicrm_dummysms_message
-- *
-- * FIXME
-- *
-- *******************************************************/
CREATE TABLE `civicrm_dummysms_message` (
  `id` int unsigned NOT NULL AUTO_INCREMENT COMMENT 'Unique DummySmsMessage ID',
  `is_inbound` tinyint NOT NULL DEFAULT 0 COMMENT 'Is the message inbound or outbound.',
  `from_phone` varchar(32) COMMENT 'Complete phone number.',
  `to_phone` varchar(32) COMMENT 'Complete phone number.',
  `body` text COMMENT 'Body of the message.',
  `created_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'When the token was created.',
  PRIMARY KEY (`id`)
)
ENGINE=InnoDB;