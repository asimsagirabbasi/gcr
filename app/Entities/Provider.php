<?php
/**
 * Created by PhpStorm.
 * User: Android
 * Date: 07/02/2018
 * Time: 4:44 PM
 */

namespace App\Entities;


use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping AS ORM;

/**
 *
 * @package App\Entities
 * @ORM\Entity
 * @ORM\Table(name="providers")
 */
class Provider
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="provider")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $userId;


    /**
     * @ORM\Column(type="string")
     */
    private $firstName;

    /**
     * @ORM\Column(type="string")
     */
    private $lastName;

    /**
     * @ORM\Column(type="string")
     */
    private $companyName;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $companySite;

    /**
     * @ORM\Column(type="string")
     */
    private $companyContactNo;

    /**
     * @ORM\Column(type="string",length=500)
     */
    private $logo;


    /**
     * @ORM\Column(type="integer")
     */
    private $country;

    /**
     * @ORM\Column(type="text")
     */
    private $address;

    /**
     * @ORM\ManyToOne(targetEntity="ProviderIndustry", inversedBy="providerId")
     * @ORM\JoinColumn(name="industry_id", referencedColumnName="id")
     */
    private $providerIndustryId;


    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="productProviderId")
     */
    private $productProvider;


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getAdminId()
    {
        return $this->adminId;
    }

    /**
     * @param mixed $adminId
     */
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getProductProvider()
    {
        return $this->productProvider;
    }

    /**
     * @param mixed $productProvider
     */
    public function setProductProvider($productProvider)
    {
        $this->productProvider = $productProvider;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param mixed $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    /**
     * @return mixed
     */
    public function getCompanySite()
    {
        return $this->companySite;
    }

    /**
     * @param mixed $companySite
     */
    public function setCompanySite($companySite)
    {
        $this->companySite = $companySite;
    }

    /**
     * @return mixed
     */
    public function getCompanyContactNo()
    {
        return $this->companyContactNo;
    }

    /**
     * @param mixed $companyContactNo
     */
    public function setCompanyContactNo($companyContactNo)
    {
        $this->companyContactNo = $companyContactNo;
    }

    /**
     * @return mixed
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param mixed $logo
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param mixed $country
     */
    public function setCountry($country)
    {
        $this->country = $country;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address)
    {
        $this->address = $address;
    }

    /**
     * @return mixed
     */
    public function getProviderIndustryId()
    {
        return $this->providerIndustryId;
    }

    /**
     * @param mixed $providerIndustryId
     */
    public function setProviderIndustryId($providerIndustryId)
    {
        $this->providerIndustryId = $providerIndustryId;
    }


}