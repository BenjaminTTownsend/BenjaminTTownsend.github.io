#NoEnv
#SingleInstance force
SendMode Input

F6:: Pause, Toggle

F4 UP::
SEND {W DOWN}
SEND {LButton DOWN}
SEND {D DOWN}
MouseMove, 20, 0, 50, R
Sleep, 1
MouseMove, -20, 0, 50, R
Sleep, 1
Loop
{
MouseMove, 20, 0, 50, R
Sleep, 1
MouseMove, -20, 0, 50, R
Sleep, 1
}