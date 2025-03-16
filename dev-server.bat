@echo off
echo Überprüfe PHP Installation...

where php >nul 2>nul
if %errorlevel% neq 0 (
    echo PHP ist nicht installiert. Bitte installieren Sie PHP.
    pause
    exit /b
)

echo Starte PHP Development Server...
echo Die Website ist unter http://localhost:8000 erreichbar
echo Zum Beenden STRG+C drücken

cd /d %~dp0
php -S localhost:8000 -t .
pause
