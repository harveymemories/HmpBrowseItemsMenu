<?php


class BrowseItemsMenuPlugin extends Omeka_Plugin_AbstractPlugin
{
  protected $_filters = array('public_navigation_items');

  public function filterPublicNavigationItems($navArray)
  {
    $navArray = array(
        array(
            'label' => __('Browse All ...'),
            'uri' => url('items/browse')
        ),
        array(
            'label' => __('Stories'),
            'uri' => url('items/browse?type=1')
        ),
        array(
            'label' => __('Images'),
            'uri' => url('items/browse?type=6')
        ),
        array(
            'label' => __('Video'),
            'uri' => url('items/browse?type=3')
        ),
        array(
            'label' => __('Audio'),
            'uri' => url('items/browse?type=5')
        ),
        array(
            'label' => __('Map Items'),
            'uri' => url('items/map')
        )
    );

    return $navArray;
  }

}
?>
