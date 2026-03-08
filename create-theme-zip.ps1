# Create a WordPress-installable theme ZIP.
# Run from: right-click create-theme-zip.ps1 -> Run with PowerShell
# Or in PowerShell: cd "C:\Users\Dallen\Documents\Rockwell-Agency-Site"; .\create-theme-zip.ps1

$themeDir = "contractor-theme"
$zipName  = "contractor-theme.zip"
$root     = $PSScriptRoot

if (-not (Test-Path (Join-Path $root $themeDir))) {
    Write-Host "Theme folder not found: $themeDir" -ForegroundColor Red
    exit 1
}

$zipPath = Join-Path $root $zipName
if (Test-Path $zipPath) { Remove-Item $zipPath -Force }

# Build zip with "contractor-theme" as root so WordPress finds style.css
Push-Location $root
Compress-Archive -Path $themeDir -DestinationPath $zipName -Force
Pop-Location

Write-Host "Created: $zipPath" -ForegroundColor Green
Write-Host "Upload this file in WordPress: Appearance -> Themes -> Add New -> Upload Theme"
