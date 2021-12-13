<?php

namespace App\Security\Voter;

use App\Entity\Evenement;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class EvenementVoter extends Voter
{
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports($attribute, $subject)
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, ['POST_EDIT', 'POST_DELETE'])
            && $subject instanceof \App\Entity\Evenement;
    }

    protected function voteOnAttribute($attribute, $subject, TokenInterface $token)
    {
        $user = $token->getUser();
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

        if ($this->security->isGranted('ROLE_ADMIN')) {
            return true;
        }


        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case 'POST_EDIT':
                return $this->canEdit($subject, $user);
                break;
            case 'POST_VIEW':
                return $this->canDelete($subject, $user);
                break;
        }

        return false;
    }

    private function canEdit(Evenement $evenement, User $user): bool
    {
        return $user === $evenement->getUtilisateur();
    }

    private function canDelete(Evenement $evenement, User $user): bool
    {
        return self::canEdit($evenement, $user);
    }
}
