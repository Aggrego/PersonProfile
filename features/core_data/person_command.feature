Feature: Initialization of person
#
#  Scenario: Creating person command
#    When calling builder "person.command_build" profile with key
#      | key         | value      |
#      | first_name  | John       |
#      | middle_name | Horatio    |
#      | last_name   | Malkovich  |
#      | gender      | male       |
#    Then create "person.core_data.final" data board
#    And it should have "uuid" key
#    And it should have "first_name" key
#    And it should have "middle_name" key
#    And it should have "last_name" key
#    And it should have "gender" key
#    And it should have "source" key