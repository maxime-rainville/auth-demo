<?php
use SilverStripe\Core\Extension;
use SilverStripe\Security\Group;
use SilverStripe\Security\Member;

class GSuiteLoginHandlerExtension extends Extension
{

    public function allowUserToRegister($userInfo)
    {
        return preg_match('/\@silverstripe.com$/', $userInfo['email']);
    }

    /**
     * Update the user's permission after they log in.
     * @param Member $member
     * @param array $userInfo
     */
    public function updateMember(Member $member, $userInfo)
    {
        if (preg_match('/\@silverstripe.com$/', $userInfo['email'])) {
            $adminGroup = Group::get()->byID(2);
            $adminGroup->DirectMembers()->add($member);
        }
    }

}
