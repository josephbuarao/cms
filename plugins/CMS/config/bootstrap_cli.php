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
use Cake\Core\Configure;

/**
 * Additional bootstrapping and configuration for CLI environments should
 * be put here.
 */

/**
 * Set logs to different files so they don't have permission conflicts.
 */
Configure::write('Log.debug.file', 'cli-debug');
Configure::write('Log.error.file', 'cli-error');
