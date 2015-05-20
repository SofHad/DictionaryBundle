<?php

namespace spec\Knp\DictionaryBundle\Twig;

use Knp\DictionaryBundle\Dictionary\DictionaryRegistry;
use PhpSpec\ObjectBehavior;

class DictionaryExtensionSpec extends ObjectBehavior
{
    public function let(DictionaryRegistry $registry)
    {
        $this->beConstructedWith($registry);
    }

    public function it_is_initializable()
    {
        $this->shouldHaveType('Knp\DictionaryBundle\Twig\DictionaryExtension');
    }

    public function it_should_return_a_dictionary_by_its_name($registry)
    {
        $testDictionary = array(
            'foo' => 'bar',
        );
        $registry->get('test')->willReturn($testDictionary)->shouldBeCalled();
        $this->getDictionary('test')->shouldReturn($testDictionary);
    }
}