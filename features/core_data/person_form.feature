Feature: Initialization of person
#
#  Scenario: Creating person from form integration
#    When create "person.form_build" profile without key
#    Then should exist "person.form_build.initial" fragmented data board
#    And it should have "faker.uuid" piece
#    And it should have "form.data" piece
#
#  Scenario: Finalize create person
#    When calling transformation for person.form_build.initial profile
#    Then should exist "person.core_data.final" data board
#    And it should have "uuid" key
#    And it should have "first_name" key
#    And it should have "middle_name" key
#    And it should have "last_name" key
#    And it should have "gender" key
#    And it should have "source" key