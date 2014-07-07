{def $valid_nodes = $block.valid_nodes}

{def $articles_with_tag = fetch( 'content', 'list', hash( 'parent_node_id', 2, 'depth', 3))}

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

{foreach $articles_with_tag as $new_node}
<p>
{$new_node.name|wash()}
</p>
{/foreach}

{undef $articles_with_tag}

{undef $valid_nodes}