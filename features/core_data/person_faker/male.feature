Feature: Initialization of person
#
#  Scenario: Creating person
#    When create "person.fake_build.male" profile without key
#    Then should exist "person.fake_build.initial" fragmented data board
#    And it should have "faker.uuid" piece
#    And it should have "faker.first_name" piece
#    And it should have "faker.middle_name" piece
#    And it should have "faker.last_name" piece
#
#  Scenario: Finalize create person
#    When calling transformation for person.fake_build.male.initial profile
#    Then should exist "person.core_data.final" data board
#    And it should have "uuid" key
#    And it should have "first_name" key
#    And it should have "middle_name" key
#    And it should have "last_name" key
#    And it should have "gender" key
#    And it should have "source" key