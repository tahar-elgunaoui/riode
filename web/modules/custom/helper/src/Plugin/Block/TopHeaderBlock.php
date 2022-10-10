<?php

namespace Drupal\helper\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\user\Entity\User;
use Drupal\media\Entity\Media;
use Drupal\Core\Cache\UncacheableDependencyTrait;
use Drupal\private_message\Entity\PrivateMessageThread;

/**
 * Provides a 'TopHeaderBlock' block.
 *
 * @Block(
 *  id = "topheader_block",
 *  admin_label = @Translation("Top Header"),
 * )
 */
class TopHeaderBlock extends BlockBase {
	use UncacheableDependencyTrait;
  	/**
	* {@inheritdoc}
	*/
  	public function build() {
		$items = array();
		return array(
			'#theme' => 'topheader_block',
			'#items' => $items
		);
	}
	
}

