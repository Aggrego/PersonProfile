Feature: Initialization of person

  Scenario: Creating person
    When calling builder "person.fake_build" profile without key
    Then create "person.fake_build.initial" fragmented data board
    And it should have "faker.uuid" piece
    And it should have "faker.first_name" piece
    And it should have "faker.middle_name" piece
    And it should have "faker.last_name" piece
#
#  Scenario: Finalize create person
#    When calling transformation for person.fake_build.initial profile
#    Then create "person.core_data.final" data board
#    And it should have "uuid" key
#    And it should have "first_name" key
#    And it should have "middle_name" key
#    And it should have "last_name" key
#    And it should have "gender" key
#    And it should have "source" key