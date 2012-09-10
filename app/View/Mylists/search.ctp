<?php // app/views/Mylist/search.ctp ?>
<h1>Blog posts</h1>
<?php 
    echo $this->Form->create("Mylist",array('action' => 'search'));
    echo $this->Form->input("q", array('label' => 'Search for'));
    echo $this->Form->end("Search");
?>
<p><?php echo $html->link("Add Mylist", "/mylist/add"); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Title</th>
                <th>Action</th>
        <th>Created</th>
    </tr>

<!-- Here's where we loop through our $results array, printing out post info -->

<?php foreach ($results as $mylist): ?>
    <tr>
        <td><?php echo $mylist['Mylist']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($mylist['Mylist']['title'],'/posts/view/'.$mylist['Mylist']['id']);?>
                </td>
                <td>
            <?php echo $this->Html->link(
                'Delete', 
                "/mylist/delete/{$mylist['Mylist']['id']}", 
                null, 
                'Are you sure?'
            )?>
            <?php echo $this->Html->link('Edit', '/posts/edit/'.$mylist['Mylist']['id']);?>
        </td>
        <td><?php echo $mylist['Mylist']['created']; ?></td>
    </tr>
<?php endforeach; ?>
</table> 