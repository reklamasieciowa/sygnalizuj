<?php
/**
 * @package    solo
 * @copyright  Copyright (c)2014-2019 Nicholas K. Dionysopoulos / Akeeba Ltd
 * @license    GNU GPL version 3 or later
 */

namespace Akeeba\Engine\Filter;

use Akeeba\Engine\Factory;
use Akeeba\Engine\Filter\Base as FilterBase;

// Protection against direct access
defined('AKEEBAENGINE') or die();

/**
 * PrestaShop Filter: Skip Directories
 *
 * Exclude files of special directories
 */
class PrestashopSkipFiles extends FilterBase
{
	public function __construct()
	{
		$this->object	= 'dir';
		$this->subtype	= 'content';
		$this->method	= 'direct';
		$this->filter_name = 'PrestashopSkipFiles';

		$configuration = Factory::getConfiguration();

		if ($configuration->get('akeeba.platform.scripttype', 'generic') !== 'prestashop')
		{
			$this->enabled = false;
			return;
		}

		$root = $configuration->get('akeeba.platform.newroot', '[SITEROOT]');

        $this->filter_data[$root] = array (
            // Output & temp directory of the application
            $this->treatDirectory($configuration->get('akeeba.basic.output_directory')),
            // Upload directory
            'upload',
            // cache directories
            'cache', 'app/cache',
            // The logs directory
            'log', 'app/logs'
        );

        parent::__construct();
	}
}
