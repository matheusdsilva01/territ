<?php

declare(strict_types=1);

?>

<header class="bg-elevation-01dp border-outline-dark sticky top-0 flex border-b px-8 py-4">
    <nav class="ms-auto">
        @if (Auth()->user())
            <button class="bg-brand-primary rounded-md p-2">Logout</button>
        @else
            <button class="bg-brand-primary rounded-md p-2">Login</button>
        @endif
    </nav>
</header>

<?php
