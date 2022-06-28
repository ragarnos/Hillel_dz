<?php

class Contacts{}
interface CreatContact
{
    public function name($value): CreatContact;
    public function surname($value): CreatContact;
    public function phone($value): CreatContact;
    public function email($value): CreatContact;
    public function address($value): CreatContact;
}
class Contact implements CreatContact
{
    private $contact;
    public function __construct()
    {
        $this->reset();
    }
    public function reset(): CreatContact
    {
        $this->contact = new Contacts();
        return $this;
    }
    public function phone($value): CreatContact
    {
        $this->contact->phone = $value;
        return $this;
    }
    public function name($value): CreatContact
    {
        $this->contact->name = $value;
        return $this;
    }
    public function surname($value): CreatContact
    {
        $this->contact->surname = $value;
        return $this;
    }
    public function email($value): CreatContact
    {
        $this->contact->email = $value;
        return $this;
    }
    public function address($value): CreatContact
    {
        $this->contact->address = $value;
        return $this;
    }
    public function build(): Contacts
    {
        $build = $this->contact;
        $this->reset();
        return $build;
    }
}

$contact = new Contact();
$printContact = $contact->phone('000-555-000')->name("test")->surname("test")->email("test@email.com")->address("test")->build();

$printContact2 = $contact->phone('000-000-000')->name("test1")->surname("test1")->email("test1@email.com")->address("test1")->build();

echo '<pre>';
print_r($printContact);

print_r($printContact2);
