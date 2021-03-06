<?php
/**
 * Licensed under The GPL-3.0 License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @since    2.0.0
 * @author   Christopher Castro <chris@quickapps.es>
 * @link     http://www.quickappscms.org
 * @license  http://opensource.org/licenses/gpl-3.0.html GPL-3.0 License
 */
class ContentsFixture
{

    /**
     * Table name.
     *
     * @var string
     */
    public $table = 'contents';
/**
 * Table columns.
 *
 * @var array
 */
    public $fields = [
    '_constraints' =>
    [
    'primary' =>
    [
      'type' => 'primary',
      'columns' =>
      [
        0 => 'id',
      ],
      'length' =>
      [
      ],
    ],
    ],
    '_indexes' =>
    [
    'contents_content_type_id_index' =>
    [
      'type' => 'index',
      'columns' =>
      [
        0 => 'content_type_id',
      ],
      'length' =>
      [
      ],
    ],
    'contents_content_type_slug_index' =>
    [
      'type' => 'index',
      'columns' =>
      [
        0 => 'content_type_slug',
      ],
      'length' =>
      [
      ],
    ],
    'contents_translation_for_index' =>
    [
      'type' => 'index',
      'columns' =>
      [
        0 => 'translation_for',
      ],
      'length' =>
      [
      ],
    ],
    'contents_slug_index' =>
    [
      'type' => 'index',
      'columns' =>
      [
        0 => 'slug',
      ],
      'length' =>
      [
      ],
    ],
    ],
    '_options' =>
    [
    'engine' => 'InnoDB',
    'collation' => 'utf8_unicode_ci',
    ],
    'id' =>
    [
    'type' => 'integer',
    'unsigned' => false,
    'null' => false,
    'default' => null,
    'comment' => '',
    'autoIncrement' => true,
    'precision' => null,
    ],
    'content_type_id' =>
    [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => false,
    'default' => null,
    'comment' => '',
    'precision' => null,
    'autoIncrement' => null,
    ],
    'content_type_slug' =>
    [
    'type' => 'string',
    'length' => 100,
    'null' => false,
    'default' => null,
    'collate' => 'utf8_unicode_ci',
    'comment' => '',
    'precision' => null,
    'fixed' => null,
    ],
    'translation_for' =>
    [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => true,
    'default' => null,
    'comment' => '',
    'precision' => null,
    'autoIncrement' => null,
    ],
    'slug' =>
    [
    'type' => 'string',
    'length' => 100,
    'null' => false,
    'default' => null,
    'collate' => 'utf8_unicode_ci',
    'comment' => '',
    'precision' => null,
    'fixed' => null,
    ],
    'title' =>
    [
    'type' => 'string',
    'length' => 250,
    'null' => false,
    'default' => null,
    'collate' => 'utf8_unicode_ci',
    'comment' => '',
    'precision' => null,
    'fixed' => null,
    ],
    'description' =>
    [
    'type' => 'string',
    'length' => 200,
    'null' => true,
    'default' => null,
    'collate' => 'utf8_unicode_ci',
    'comment' => '',
    'precision' => null,
    'fixed' => null,
    ],
    'promote' =>
    [
    'type' => 'boolean',
    'length' => null,
    'null' => false,
    'default' => '0',
    'comment' => 'Show in front page?',
    'precision' => null,
    ],
    'sticky' =>
    [
    'type' => 'boolean',
    'length' => null,
    'null' => false,
    'default' => '0',
    'comment' => 'Show at top of lists',
    'precision' => null,
    ],
    'comment_status' =>
    [
    'type' => 'integer',
    'length' => 2,
    'unsigned' => false,
    'null' => false,
    'default' => '0',
    'comment' => '0=closed, 1=open, 2=readonly',
    'precision' => null,
    'autoIncrement' => null,
    ],
    'language' =>
    [
    'type' => 'string',
    'fixed' => true,
    'length' => 10,
    'null' => true,
    'default' => null,
    'collate' => 'utf8_unicode_ci',
    'comment' => '',
    'precision' => null,
    ],
    'status' =>
    [
    'type' => 'boolean',
    'length' => null,
    'null' => false,
    'default' => null,
    'comment' => '',
    'precision' => null,
    ],
    'created' =>
    [
    'type' => 'datetime',
    'length' => null,
    'null' => false,
    'default' => null,
    'comment' => '',
    'precision' => null,
    ],
    'modified' =>
    [
    'type' => 'datetime',
    'length' => null,
    'null' => false,
    'default' => null,
    'comment' => '',
    'precision' => null,
    ],
    'created_by' =>
    [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => true,
    'default' => null,
    'comment' => '',
    'precision' => null,
    'autoIncrement' => null,
    ],
    'modified_by' =>
    [
    'type' => 'integer',
    'length' => 11,
    'unsigned' => false,
    'null' => true,
    'default' => null,
    'comment' => '',
    'precision' => null,
    'autoIncrement' => null,
    ],
    ];
/**
 * Table records.
 *
 * @var array
 */
    public $records = [
    0 =>
    [
    'id' => 1,
    'content_type_id' => 1,
    'content_type_slug' => 'article',
    'translation_for' => null,
    'slug' => 'hello-world',
    'title' => '¡Hello World!',
    'description' => 'hello world demo article',
    'promote' => true,
    'sticky' => false,
    'comment_status' => 1,
    'language' => '',
    'status' => true,
    'created' => '2014-06-12 07:44:01',
    'modified' => '2016-12-04 20:52:10',
    'created_by' => 1,
    'modified_by' => 1,
    ],
    1 =>
    [
    'id' => 2,
    'content_type_id' => 2,
    'content_type_slug' => 'page',
    'translation_for' => null,
    'slug' => 'about',
    'title' => 'About',
    'description' => 'about QuickAppsCMS demo page',
    'promote' => false,
    'sticky' => false,
    'comment_status' => 0,
    'language' => '',
    'status' => true,
    'created' => '2015-03-31 21:06:50',
    'modified' => '2015-03-31 21:06:50',
    'created_by' => 1,
    'modified_by' => 1,
    ],
    ];
}
