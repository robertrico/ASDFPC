title IndirectLoops
.model small
.stack 100h
.data
        Y dw ?     ;Data Initialize
	Sum dw ?
	W dw ?
        ent db 0dh,0ah,"Enter a number up to 5 digits:",20h,'$'
        msg db 0dh,0ah,"Sum is: "
        dig db 0,0,0,0,0
	db 0dh,0ah
        db "  W is: " 
        dig2 db 0,0,0,0,0
        db 0dh,0ah,'$'

.code
main proc
        mov ax, @data ;Initialize Data
        mov ds, ax

        mov si,offset ent
        call print
        call keyput   ;Obtain Input From User

        mov ax,bx     ;Assign Input Value to AX Register
        dec ax

        mov bx,36
        add bx,ax     ;Add 36

        push ax       ;Preserve AX to be used for Another Division
        mov cx,4      ; y/4
        call divnum
        add bx,ax

        pop ax
        mov cx,100    ;y/100
        call divnum
        add bx,ax

        mov Sum,bx    ;Assign Sum

        mov cx,7      ;Mod Sum by 7
        call divnum
        inc dx        ;Add one to Sum % 7

        mov W,dx      ;Assign W

        mov si,offset dig  ;Prepare ASCII Conversion
        mov ax,sum        
        call insert        ;Insert Converted Characters into Array

        mov si,offset dig2 ;Prepare ASCII Conversion
	mov ax,w
        call insert        ;Insert Converted Characters into Array

        mov si,offset msg
        call print         ;Print Final Results

	mov ax, 4C00h
	int 21h
main endp
print proc                  ;Print Loop
        mov ah,2            ;Prints Converted Characters to console
PrintLoop:
        mov dl,[si]
        cmp dl,24h
        je EndPrint
        mov bx,100b
        int 21h
        inc si
        jmp PrintLoop
EndPrint:
        ret
print endp

insert proc
                         ;Insert Procedure Inserts Converted ASCII
        add si,4         ;Characters into the arrays at SI
        mov dx,0
        mov bx,10

inLoop:
        cmp ax,0
        je Endin
	div bx
	add dx,30h
	mov [si],dl
        mov dx,0
        dec si
        jmp inLoop
Endin:
        ret

insert endp

divnum proc
                  ;Simple Division Procedure
        mov dx,0  ;After Calling using DX will obtain Modulus
        div cx
        ret

divnum endp

keyput proc

        mov bx,0
        mov cx,10
input:
        mov ah,7
        int 21h

        cmp al, 0dh    ;Jump if the return key is pressed
        je Endput

        mov ah,2
        mov dx,ax
        int 21h

        mov dx,0        ;Reset to ensure proper calculations
        mov ah,0

        push ax
        mov ax,bx
        mul cx
        mov bx,ax

        pop ax
        sub ax,30h  ;Convert To ASCII
        add bx,ax
        jmp input

Endput:   
        
        ret
keyput endp

end 
