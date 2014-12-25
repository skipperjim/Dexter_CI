@echo off

set which=%1
set command=%2
if ""%2""=="""" goto done
shift
:setup
if ""%2""=="""" goto done
set command=%command% %2
shift
goto setup
:done

set liquibase=C:\Users\sgray\Development\liquibase\liquibase.bat
set classpath=C:\Users\sgray\workspace\lib\mysql-connector-java-5.1.33-bin.jar;C:\Users\sgray\Development\liquibase\liquibase.jar
set changelog=database.xml
IF "%which%" == "local" (
  set dburl=jdbc:mysql://localhost:3306/gonfin5_login
  set dbuser=root
  set dbpass=root
) ELSE IF "%which%" == "live" (
  set dburl=jdbc:mysql://gonfind.com:3306/gonfin5_login
  set dbuser=gonfin5_user
  set dbpass=oicu812!
) ELSE (
  echo Usage: databaseUpdate.bat ^<local^|live^> ^<liquibase command^>
  exit
)

java -cp "%classpath%" liquibase.integration.commandline.Main --changeLogFile="%changelog%" --username="%dbuser%" --password="%dbpass%" --url="%dburl%" %command%