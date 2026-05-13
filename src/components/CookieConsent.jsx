import React, { useState, useEffect } from 'react';
import { motion, AnimatePresence } from 'framer-motion';
import { Cookie, X } from 'lucide-react';

const CookieConsent = () => {
  const [isVisible, setIsVisible] = useState(false);

  useEffect(() => {
    const consent = localStorage.getItem('cookie-consent');
    if (!consent) {
      const timer = setTimeout(() => {
        setIsVisible(true);
      }, 2000); // Show after 2 seconds
      return () => clearTimeout(timer);
    }
  }, []);

  const handleAccept = () => {
    localStorage.setItem('cookie-consent', 'true');
    setIsVisible(false);
  };

  const handleDecline = () => {
    setIsVisible(false);
  };

  return (
    <AnimatePresence>
      {isVisible && (
        <motion.div
          initial={{ y: 100, opacity: 0 }}
          animate={{ y: 0, opacity: 1 }}
          exit={{ y: 100, opacity: 0 }}
          transition={{ type: 'spring', damping: 25, stiffness: 200 }}
          className="fixed bottom-4 left-4 right-4 sm:left-6 sm:right-6 flex justify-center z-[100]"
        >
          <div className="bg-white/90 backdrop-blur-xl border border-white/20 rounded-2xl sm:rounded-[2rem] p-4 sm:p-6 shadow-[0_20px_50px_rgba(0,0,0,0.15)] flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 sm:gap-6 max-w-6xl w-full">
            <div className="flex items-start sm:items-center gap-3 sm:gap-4">
              <div className="w-10 sm:w-12 h-10 sm:h-12 rounded-lg sm:rounded-2xl bg-brand-primary/10 flex items-center justify-center text-brand-primary shrink-0">
                <Cookie size={20} className="sm:w-6 sm:h-6" />
              </div>
              <div>
                <p className="text-gray-600 leading-relaxed max-w-2xl text-xs sm:text-sm md:text-base text-left">
                  <span className="font-bold text-gray-900">Cookie Notice:</span> We use cookies to enhance your experience and analyze site traffic. By clicking "Accept", you agree to our use of cookies.
                </p>
              </div>
            </div>

            <div className="flex items-center gap-2 sm:gap-3 w-full sm:w-auto">
              <button
                onClick={handleDecline}
                className="flex-1 sm:flex-none px-4 sm:px-6 py-2.5 sm:py-3 rounded-lg sm:rounded-xl font-bold text-gray-500 hover:bg-gray-100 transition-colors text-xs sm:text-sm"
              >
                Decline
              </button>
              <button
                onClick={handleAccept}
                className="flex-1 sm:flex-none px-4 sm:px-8 py-2.5 sm:py-3 rounded-lg sm:rounded-xl font-bold text-white bg-brand-primary shadow-lg shadow-brand-primary/25 hover:scale-105 active:scale-95 transition-all text-xs sm:text-sm whitespace-nowrap"
              >
                Accept All
              </button>
            </div>
          </div>
        </motion.div>
      )}
    </AnimatePresence>
  );
};

export default CookieConsent;
