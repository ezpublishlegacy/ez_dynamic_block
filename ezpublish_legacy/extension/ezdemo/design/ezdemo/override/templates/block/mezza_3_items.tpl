{def $valid_nodes = $block.valid_nodes}

<h2>{'Block:'|i18n( 'design/standard/block/view' )} {ezini( $block.type, 'Name', 'block.ini' )}</h2>

<ul>
{foreach $valid_nodes as $valid_node}
  <li>
    {$valid_node.name|wash()}
    <br/>
    {attribute_view_gui attribute=$valid_node.data_map.intro}
  </li>
{/foreach}
</ul>

{undef $valid_nodes}

<h2>Params</h2>
{$block.fetch_params}
