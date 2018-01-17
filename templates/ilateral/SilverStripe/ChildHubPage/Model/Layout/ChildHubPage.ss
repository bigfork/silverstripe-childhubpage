<div class="content-container">
	<article>
		<h1>$Title</h1>
        <div class="content">$Content</div>
	</article>
    
    <% if $PaginatedChildren.exists %>
        <div class="child-list">
            <% if $ShowChildrenAs == "Grid" %>
                <div class="line row units-row child-list">
                    <% loop $PaginatedChildren %>
                        <% include ilateral\\SilverStripe\\ChildHubPage\\ChildHubGridItem %>
                        
                        <% if $MultipleOf(3) %></div><div class="line row units-row child-list"><% end_if %>
                    <% end_loop %>
                </div>
            <% else %>
                <% loop $PaginatedChildren %>
                    <% include ilateral\\SilverStripe\\ChildHubPage\\ChildHubListItem %>
                <% end_loop %>
            <% end_if %>
        </div>
        <% with $PaginatedChildren %>
            <% include ilateral\\SilverStripe\\ChildHubPage\\Pagination %>
        <% end_with %>
    <% end_if %>
    
    $Form
    $CommentsForm
</div>