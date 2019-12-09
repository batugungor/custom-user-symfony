<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 * @ORM\Table(name="tbl_companies_users")
 */
class User implements UserInterface
{
    /**
     * @var int
     * @ORM\Id()
     * @ORM\Column(name="tbl_companies_users_id", type="integer", nullable=false)
     */
    private $id;

    /**
     * @ORM\Column(name="user_username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var int|null
     *
     * @ORM\Column(name="tbl_companies_id", type="integer", nullable=true)
     */
    private $tblCompaniesId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_password", type="string", length=32, nullable=true)
     */
    private $userPassword;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_password2", type="string", length=32, nullable=true)
     */
    private $userPassword2;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_password_show", type="string", length=50, nullable=true)
     */
    private $userPasswordShow;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_gender", type="string", length=20, nullable=true)
     */
    private $userGender;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_initials", type="string", length=20, nullable=true)
     */
    private $userInitials;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_firstname", type="string", length=100, nullable=true)
     */
    private $userFirstname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_name", type="string", length=255, nullable=true)
     */
    private $userLastname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_function", type="string", length=200, nullable=true)
     */
    private $userFunction;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_email", type="string", length=255, nullable=true)
     */
    private $userEmail;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_mobilenr", type="string", length=30, nullable=true)
     */
    private $userMobilenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_phonenr", type="string", length=20, nullable=true)
     */
    private $userPhonenr;

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_autograph", type="text", length=65535, nullable=true)
     */
    private $userAutograph;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="user_lastlogin", type="datetime", nullable=true)
     */
    private $userLastlogin;

    /**
     * @var string
     *
     * @ORM\Column(name="group_only", type="string", length=1, nullable=false, options={"default"="1"})
     */
    private $groupOnly = '1';

    /**
     * @var bool
     *
     * @ORM\Column(name="user_contactperson", type="boolean", nullable=false)
     */
    private $userContactperson = '0';

    /**
     * @var bool
     *
     * @ORM\Column(name="user_active", type="boolean", nullable=false, options={"default"="1"})
     */
    private $userActive = '1';

    /**
     * @var string|null
     *
     * @ORM\Column(name="user_md5", type="string", length=32, nullable=true)
     */
    private $userMd5;

    /**
     * @var string|null
     *
     * @ORM\Column(name="username_canonical", type="string", length=32, nullable=true)
     */
    private $usernameCanonical;

    /**
     * @var bool
     *
     * @ORM\Column(name="super_admin", type="boolean", nullable=false)
     */
    private $superAdmin = '0';

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->username;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword()
    {
        return $this->userPassword;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed for apps that do not check user passwords
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getTblCompaniesUsersId(): ?int
    {
        return $this->tblCompaniesUsersId;
    }

    public function getTblCompaniesId(): ?int
    {
        return $this->tblCompaniesId;
    }

    public function setTblCompaniesId(?int $tblCompaniesId): self
    {
        $this->tblCompaniesId = $tblCompaniesId;

        return $this;
    }

    public function getUserPassword2(): ?string
    {
        return $this->userPassword2;
    }

    public function setUserPassword2(?string $userPassword2): self
    {
        $this->userPassword2 = $userPassword2;

        return $this;
    }

    public function getUserPasswordShow(): ?string
    {
        return $this->userPasswordShow;
    }

    public function setUserPasswordShow(?string $userPasswordShow): self
    {
        $this->userPasswordShow = $userPasswordShow;

        return $this;
    }

    public function getUserGender(): ?string
    {
        return $this->userGender;
    }

    public function setUserGender(?string $userGender): self
    {
        $this->userGender = $userGender;

        return $this;
    }

    public function getUserInitials(): ?string
    {
        return $this->userInitials;
    }

    public function setUserInitials(?string $userInitials): self
    {
        $this->userInitials = $userInitials;

        return $this;
    }

    public function getUserFirstname(): ?string
    {
        return $this->userFirstname;
    }

    public function setUserFirstname(?string $userFirstname): self
    {
        $this->userFirstname = $userFirstname;

        return $this;
    }

    public function getUserLastname(): ?string
    {
        return $this->userLastname;
    }

    public function setUserLastname(?string $userLastname): self
    {
        $this->userLastname = $userLastname;

        return $this;
    }

    public function getUserFunction(): ?string
    {
        return $this->userFunction;
    }

    public function setUserFunction(?string $userFunction): self
    {
        $this->userFunction = $userFunction;

        return $this;
    }

    public function getUserEmail(): ?string
    {
        return $this->userEmail;
    }

    public function setUserEmail(?string $userEmail): self
    {
        $this->userEmail = $userEmail;

        return $this;
    }

    public function getUserMobilenr(): ?string
    {
        return $this->userMobilenr;
    }

    public function setUserMobilenr(?string $userMobilenr): self
    {
        $this->userMobilenr = $userMobilenr;

        return $this;
    }

    public function getUserPhonenr(): ?string
    {
        return $this->userPhonenr;
    }

    public function setUserPhonenr(?string $userPhonenr): self
    {
        $this->userPhonenr = $userPhonenr;

        return $this;
    }

    public function getUserAutograph(): ?string
    {
        return $this->userAutograph;
    }

    public function setUserAutograph(?string $userAutograph): self
    {
        $this->userAutograph = $userAutograph;

        return $this;
    }

    public function getUserLastlogin(): ?\DateTimeInterface
    {
        return $this->userLastlogin;
    }

    public function setUserLastlogin(?\DateTimeInterface $userLastlogin): self
    {
        $this->userLastlogin = $userLastlogin;

        return $this;
    }

    public function getGroupOnly(): ?string
    {
        return $this->groupOnly;
    }

    public function setGroupOnly(string $groupOnly): self
    {
        $this->groupOnly = $groupOnly;

        return $this;
    }

    public function getUserContactperson(): ?bool
    {
        return $this->userContactperson;
    }

    public function setUserContactperson(bool $userContactperson): self
    {
        $this->userContactperson = $userContactperson;

        return $this;
    }

    public function getUserActive(): ?bool
    {
        return $this->userActive;
    }

    public function setUserActive(bool $userActive): self
    {
        $this->userActive = $userActive;

        return $this;
    }

    public function getUserMd5(): ?string
    {
        return $this->userMd5;
    }

    public function setUserMd5(?string $userMd5): self
    {
        $this->userMd5 = $userMd5;

        return $this;
    }

    public function getSuperAdmin(): ?bool
    {
        return $this->superAdmin;
    }

    public function setSuperAdmin(bool $superAdmin): self
    {
        $this->superAdmin = $superAdmin;

        return $this;
    }

    public function __toString()
    {
        return (string) $this->getUserFirstname();
    }
}
