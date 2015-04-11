
			    <aside class="aside">
                <div  class="aside-block">
                    <form action="<?php echo home_url('/'); ?>" ...>
                       <ul class="search-block">
                            <li><input type="text" id="s" name="s" /></li>
                            <li class="search-button"><input type="button" /></li>
                        </ul>
                    </form>
                </div>
<?php if(!dynamic_sidebar('aside')): ?>

                       <?php endif; ?>
                
            </aside>