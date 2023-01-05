<footer>
    <footer>
        <div class="wrapper">
            <div class="alignwide" x-data="{ open: false }">
                <h5>Footer</h5>
                <div x-data="{ open: false }">
                    
                    <button x-on:click="open = ! open">
                        Toggle
                    </button>
                
                    <span x-show="open">
                        Content...
                    </span>
                </div>
                <div>
                    Copyright © <span x-text="new Date().getFullYear()"></span>
                </div>
                <div x-effect="console.log('Count is '+count)"></div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</footer>