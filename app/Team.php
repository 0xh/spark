<?php

namespace App;

use Laravel\Spark\Team as SparkTeam;
use ZiNETHQ\SparkRoles\Traits\CanHaveRoles;

class Team extends SparkTeam
{
    use CanHaveRoles;

    // default role is member
    // administrator , member/owner
    // add new such as worker and client

    // Every team can have zero or more roles.
    // Every team can have zero or more permissions.

    // Roles and permissions can be shared between users and teams.
    // Optionally, users and teams with a certain role (e.g. developer) are added to the Spark developer's array.


    /**
     * Get all of the users that belong to the team.
     */
    // public function users() {}

    /**
     * Get the owner of the team.
     */
    // public function owner() {}

    /**
     * Get all of the pending invitations for the team.
     */
    // public function invitations() {}

    /**
     * Invite a user to the team by e-mail address.
     *
     * @param  string  $email
     * @return \Laravel\Spark\Teams\Invitation
     */
    // public function inviteUserByEmail($email) {}

    /**
     * Remove a user from the team by their ID.
     *
     * @param  int  $userId
     * @return void
     */
    // public function removeUserById($userId) {}
}
