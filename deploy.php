<?php
    /**
     * GIT DEPLOYMENT SCRIPT
     *
     * Used for automatically deploying websites via GitHub
     *
     */

    // array of commands
    $commands = array(
        'git pull',
        'git submodule sync',
        'git submodule update',
        'git submodule status',
    );

    // exec commands
    foreach($commands AS $command){
        $tmp = shell_exec($command);
    }

