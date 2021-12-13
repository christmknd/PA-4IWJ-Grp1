<?php

namespace App\Security\Voter;

use App\Entity\Annonce;
use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\User\UserInterface;

class AnnonceVoter extends Voter
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
            && $subject instanceof Annonce;
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
            case 'POST_DELETE':
                return $this->canDelete($subject, $user);
                break;
        }

        return false;
    }

    private function canEdit(Annonce $annonce, User $user): bool
    {
        return $user === $annonce->getUtilisateur();
    }

    private function canDelete(Annonce $annonce, User $user): bool
    {
        return self::canEdit($annonce, $user);
    }
}
