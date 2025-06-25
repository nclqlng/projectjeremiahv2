const motivationalMessages = [
    // English
    "Every step forward is progress. Every conversation matters. You're not alone on this journey.",
    "You are stronger than you think, and braver than you feel.",
    "It's okay to ask for help. Support is always here for you.",
    "Your feelings are valid. Take things one day at a time.",
    "Small steps can lead to big changes. Keep going!",
    "You matter, and your story is important.",
    "Be kind to yourself. Healing is a journey, not a race.",
    
    // More Tagalog
    
    "Hindi mo kailangang maging perpekto para maging mahalaga.",
    "Laging may liwanag sa dulo ng pagsubok.",
    "Ang bawat luha ay bahagi ng paglago.",
    "Huwag matakot magpahinga, bahagi ito ng pagbangon.",
    "May mga taong handang makinig at umalalay sa'yo.",
    "Ang pagngiti ay simula ng pag-asa.",
    "Kahit mabagal ang takbo, basta't hindi sumusuko, panalo ka pa rin.",
    "Ang tunay na lakas ay ang pagtanggap sa sarili.",
    "Walang maliit na tagumpay—lahat ay mahalaga.",
    "Ang bawat araw ay bagong simula."
];
const randomIndex = Math.floor(Math.random() * motivationalMessages.length);
document.addEventListener('DOMContentLoaded', function() {
    const textSpan = document.getElementById('motivation-text');
    if (textSpan) {
        textSpan.textContent = motivationalMessages[randomIndex];
        const toast = document.getElementById('motivation-toast');
        toast.style.display = 'block';
        toast.classList.add('motivation-toast-in');
        setTimeout(() => {
            toast.classList.remove('motivation-toast-in');
            toast.classList.add('motivation-toast-out');
            setTimeout(() => { toast.style.display = 'none'; toast.classList.remove('motivation-toast-out'); }, 600);
        }, 7000);
    }
}); 