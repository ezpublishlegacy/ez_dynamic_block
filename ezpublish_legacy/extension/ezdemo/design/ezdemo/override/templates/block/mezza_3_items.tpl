{def $valid_nodes = $block.valid_nodes}

{def $articles_with_tag = fetch('content', 'list',
  hash( 'parent_node_id', 2,
        'sort_by', array( 'priority', false() ),
        'limit', 10,
        'extended_attribute_filter', 
          hash(
            'id', 'TagsAttributeFilter',
            'params', hash('tag_id', array(1))
          ),
        'depth', 4
      )
)}

<h2>MM{'Block:'|i18n( 'design/standard/block/view' )} {ezini( $block.type, 'Name', 'block.ini' )}</h2>

<ul>
{foreach $valid_nodes as $valid_node}
  <li>
    {$valid_node.name|wash()}
    <br/>
    {attribute_view_gui attribute=$valid_node.data_map.intro}
  </li>
{/foreach}
</ul>

<ul>
{foreach $articles_with_tag as $new_node}
  <li>
    {$new_node.name|wash()}
    <br/>
    {attribute_view_gui attribute=$new_node.data_map.intro}
  </li>
{/foreach}
</ul>

{undef $articles_with_tag}

{undef $valid_nodes}