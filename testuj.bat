@ECHO OFF
IF NOT EXIST tests\tmp @MKDIR tests\tmp


CALL vendor\bin\run-tests.bat tests/ -log tests/tmp/tests.log %*

:END
PAUSE
