#Feature: Initialization of person
#
#  Scenario: Creating person command
#    When calling builder "person.relationship.family.command_build" profile with key
#      | key                  | value                                |
#      | superior_person_uuid | 0d2074fe-1144-4337-84d6-4832d1878f5d |
#      | child_person_uuid    | b0d6d1bb-061f-4ec0-927e-cc5095d3a122 |
#      | type                 | mother                               |
#    Then create "person.relationship.family.initial" fragmented data board
#    And it should have "source.person.core_data" piece
#    And it should have "source.person.core_data" piece
#    And it should have "person.relationship.family.requested_type" piece
#
#  Scenario: Creating person command
#    When calling transformation for person.relationship.family.initial profile
#    Then create "person.relationship.family.final" data board
#    And it should have "superior_person_uuid" key
#    And it should have "child_person_uuid" key
#    And it should have "type" key
