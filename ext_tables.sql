#
# Table structure for table 'tx_lieferant_domain_model_lieferant'
#
CREATE TABLE tx_lieferant_domain_model_lieferant (
                                                           uid int(11) NOT NULL auto_increment,
                                                           pid int(11) DEFAULT '0' NOT NULL,
                                                           tstamp int(11) DEFAULT '0' NOT NULL,
                                                           crdate int(11) DEFAULT '0' NOT NULL,
                                                           cruser_id int(11) DEFAULT '0' NOT NULL,
                                                           t3ver_oid int(11) DEFAULT '0' NOT NULL,
                                                           t3ver_id int(11) DEFAULT '0' NOT NULL,
                                                           t3ver_wsid int(11) DEFAULT '0' NOT NULL,
                                                           t3ver_label varchar(30) DEFAULT '' NOT NULL,
                                                           t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
                                                           t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
                                                           t3ver_count int(11) DEFAULT '0' NOT NULL,
                                                           t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
                                                           t3ver_move_id int(11) DEFAULT '0' NOT NULL,
                                                           t3_origuid int(11) DEFAULT '0' NOT NULL,
                                                           editlock tinyint(4) DEFAULT '0' NOT NULL,
                                                           sys_language_uid int(11) DEFAULT '0' NOT NULL,
                                                           l10n_parent int(11) DEFAULT '0' NOT NULL,
                                                           l10n_diffsource mediumtext,
                                                           l10n_source int(11) DEFAULT '0' NOT NULL,
                                                           l10n_state text COLLATE utf8_unicode_ci DEFAULT NULL,
                                                           deleted tinyint(4) DEFAULT '0' NOT NULL,
                                                           hidden tinyint(4) DEFAULT '0' NOT NULL,
                                                           starttime int(11) DEFAULT '0' NOT NULL,
                                                           endtime int(11) DEFAULT '0' NOT NULL,
                                                           sorting int(11) DEFAULT '0' NOT NULL,
                                                           fe_group varchar(100) DEFAULT '0' NOT NULL,
                                                           path_segment varchar(2048),
                                                           import_id varchar(100) DEFAULT '' NOT NULL,
                                                           import_source varchar(100) DEFAULT '' NOT NULL,

                                                           title varchar(255) DEFAULT '' NOT NULL,
                                                           region varchar(255) DEFAULT '' NOT NULL,
                                                           produkte varchar(255) DEFAULT '' NOT NULL,
                                                           slug varchar(2048),
                                                           image int(11) unsigned DEFAULT '0',

                                                           PRIMARY KEY (uid),
                                                           KEY parent (pid),
                                                           KEY sys_language_uid_l10n_parent (sys_language_uid,l10n_parent),
                                                           KEY path_segment (path_segment(185), uid),
                                                           KEY import (import_id,import_source),
) ROW_FORMAT=DYNAMIC;

#
# Extend table structure of table 'sys_category'
#
CREATE TABLE sys_category (
                              fe_group varchar(100) DEFAULT '0' NOT NULL,
                              image int(11) unsigned DEFAULT '0',
                              shortcut int(11) DEFAULT '0' NOT NULL,
                              import_id varchar(100) DEFAULT '' NOT NULL,
                              import_source varchar(100) DEFAULT '' NOT NULL,
                              seo_title varchar(255) NOT NULL DEFAULT '',
                              seo_description text,
                              seo_headline varchar(255) NOT NULL DEFAULT '',
                              seo_text text,
                              slug varchar(2048),
                              KEY import (import_id,import_source)
);


#
# Table structure for table 'tx_lieferant_domain_model_region'
#
#
CREATE TABLE tx_lieferant_domain_model_college (
                                                            uid int(11) NOT NULL auto_increment,
                                                            pid int(11) DEFAULT '0' NOT NULL,
                                                            tstamp int(11) DEFAULT '0' NOT NULL,
                                                            crdate int(11) DEFAULT '0' NOT NULL,
                                                            cruser_id int(11) DEFAULT '0' NOT NULL,
                                                            t3ver_oid int(11) DEFAULT '0' NOT NULL,
                                                            t3ver_id int(11) DEFAULT '0' NOT NULL,
                                                            t3ver_wsid int(11) DEFAULT '0' NOT NULL,
                                                            t3ver_label varchar(30) DEFAULT '' NOT NULL,
                                                            t3ver_state tinyint(4) DEFAULT '0' NOT NULL,
                                                            t3ver_stage tinyint(4) DEFAULT '0' NOT NULL,
                                                            t3ver_count int(11) DEFAULT '0' NOT NULL,
                                                            t3ver_tstamp int(11) DEFAULT '0' NOT NULL,
                                                            t3ver_move_id int(11) DEFAULT '0' NOT NULL,
                                                            t3_origuid int(11) DEFAULT '0' NOT NULL,
                                                            editlock tinyint(4) DEFAULT '0' NOT NULL,
                                                            sys_language_uid int(11) DEFAULT '0' NOT NULL,
                                                            l10n_parent int(11) DEFAULT '0' NOT NULL,
                                                            l10n_diffsource mediumtext,
                                                            l10n_source int(11) DEFAULT '0' NOT NULL,
                                                            deleted tinyint(4) DEFAULT '0' NOT NULL,
                                                            hidden tinyint(4) DEFAULT '0' NOT NULL,
                                                            starttime int(11) DEFAULT '0' NOT NULL,
                                                            endtime int(11) DEFAULT '0' NOT NULL,
                                                            sorting int(11) DEFAULT '0' NOT NULL,
                                                            fe_group varchar(100) DEFAULT '0' NOT NULL,
                                                            path_segment varchar(2048),
                                                            import_id varchar(100) DEFAULT '' NOT NULL,
                                                            import_source varchar(100) DEFAULT '' NOT NULL,
                                                            l10n_state text COLLATE utf8_unicode_ci DEFAULT NULL,

                                                            title varchar(255) DEFAULT '' NOT NULL,
                                                            PRIMARY KEY (uid),
);