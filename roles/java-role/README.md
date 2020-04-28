Java Role
=========

This role can be used to install java across the multiple Linux distributions i.e., RedHat, Debian and FreeBSD.

Requirements
------------

None.

Role Variables
--------------
All the variables for this role are set in defaults/main.yml. 
These variables are editable depends on Java version user wants to be installed on his systems. 
Different possible options are mentioned for variables thus user can easily edit it and use it.

Example: usage for Ubuntu systems which are based on 'Debian'

    #packages variables for Debian distribution
    #Other Java versions for Debian are following
    #[java, openjdk-9-jdk, openjdk-11-jdk]

    Debian_package: openjdk-8-jdk

Dependencies
------------

None

Example Playbook
----------------
Here is an example to call the role from a playbook.

    - hosts: servers
      become: true
      roles:
         - { role: java-role }

License
-------

BSD

Author Information
------------------

An optional section for the role authors to include contact information, or a website (HTML is not allowed).
