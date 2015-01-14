<?php


namespace SlimVanilla\Repositories;

use SlimVanilla\Models\Messages as Messages;

/**
 * Class MessageRepository
 * @package SlimVanilla\Repositories
 */
class MessageRepository {

    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAllWelcomeMessages(){
        return Messages::all();
    }
}